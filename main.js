
if (document.readyState == "loading"){
    document.addEventListener("DOMContentLoaded", ready);
} 
else{
    ready();
}



// pagination 
console.clear();
(function() {

    var bulletClasses = {
        elements: {
            container: ".pindicator",
            bullet: ".bullet",
          },
          
          helpers: {
              past: "past",
              current: "current",
              next: "next",
              future: "future",
          }
      };
      
      var bulletEls;
      document.addEventListener("DOMContentLoaded", initBullets);
      
      function initBullets() {
          bulletEls = Array.prototype.slice.call(
              document.body.querySelectorAll(bulletClasses.elements.bullet)
              );
              
              bulletEls.forEach(function(el) {
                  el.addEventListener("mousedown", function(event) {
                      gotoPage(bulletEls.indexOf(this) + 1);
                  });
                  el.addEventListener("touchstart", function(event) {
                      event.preventDefault();
                      gotoPage(bulletEls.indexOf(this) + 1);
                  });
              });
          }
          
          function gotoPage(pageNum) {
              bulletEls.forEach(function(e) {
                  e.classList.remove.apply(e.classList,
                  Object.keys(bulletClasses.helpers).map(function(e){
                      return bulletClasses.helpers[e];
                  })
                  )
              });
              
              bulletEls[pageNum - 1].classList.add(bulletClasses.helpers.current);
              if(pageNum > 1) {
                  for(var i = 0; i < pageNum; i++) {
                      bulletEls[i].classList.add(bulletClasses.helpers.past);
                  }
              }
              
              if(pageNum < bulletEls.length) {
                  bulletEls[pageNum].classList.add(bulletClasses.helpers.next);
                  for(var i = bulletEls.length - 1; i >= pageNum; i--) {
                      bulletEls[i].classList.add(bulletClasses.helpers.future);
                  }
              }
          }
      })();


// end pagination 




//SCRIPT CART & FORM



//function ready :
function ready(){
//remove product from form:
    var removeCartButtons = document.getElementsByClassName("cart-remove");
    console.log(removeCartButtons);
    for(var i = 0; i< removeCartButtons.length; i++){
        var button = removeCartButtons[i];
        button.addEventListener("click", removeCartItem);
    }
    //Add product 
    var AddProduct = document.getElementsByClassName("SelectBtn");
    for(var i = 0; i< AddProduct.length; i++){
        var button = AddProduct[i];
        button.addEventListener("click", addCartClicked);
    }
    //select button work :
    document.getElementsByClassName("SelectBtn")[0].addEventListener("click", selectButtonClicked);
}
//select button 
function selectButtonClicked(){
    alert("Your Order is placed")
    var cartContent = document.getElementsByClassName("cart-content")[0]
    while (cartContent.hasChildNodes()){
        cartContent.removeChild(cartContent.firstChild);
    }
    updateTotal();
}

//remove product from form:
function removeCartItem(event){
    var buttonClicked = event.target;
    buttonClicked.parentElement.remove();
    updateTotal();
}



//******************************************************** */
//Add product 
function addCartClicked(event){
    var button = event.target;
    var selectProduct = button.parentElement;
    var title = selectProduct.getElementsByClassName("product-name")[0].innerText;
    var price = selectProduct.getElementsByClassName("price")[0].innerText;
    var productImg = selectProduct.getElementsByClassName("card-img")[0].src;
    addProductToCart(title, price, productImg );
    updateTotal();
}
//******************************************************** */





// add the selected item to cart:
function addProductToCart(title, price, productImg){
    //var cartShopBox.classList.add('cart-box')
    var selectProductBox = document.createElement("div");
    selectProductBox.classList.add("cart-box");
    var cartItems = document.getElementsByName("cart-content")[0];
    var cartItemsNames = cartItems.getElementsByClassName("cart-product-title");
    for (var i =0; i < cartItemsNames.length; i++){
        if(cartItemsNames[i].innerText == title){
           alert("you have already select this item "); 
           return;
        }
        
    }
}
var cartBoxContent = ` 
            <img src="$(productImg)" alt="product" class="cart-img" style="width: 50%;">
                                        
            <div class="detail-box">
                
                <div class="cart-product-title">${title}}</div>
                
                <div class="cart-price">${price}</div>

            </div>   
            <i class="fa-regular fa-xmark cart-remove"></i>

`;

    selectProductBox.innerHTML = cartBoxContent;
    cartItems.append(selectProductBox);
    selectProductBox.getElementsByClassName("cart-remove")[0].addEventListener("click", removeCartItem);

    //update total 
    function updateTotal(){
        var cartContent = document.getElementsByClassName("cart-content")[0];
        var cartBoxs = getElementsByClassName("cart-box");
        var total = 0;
        for(var i = 0; i< cartBoxs.length; i++){
            var cartBox = cartBoxs[i];
            var priceElement = cartBox.getElementsByClassName("cart-price")[0];
            var price = parseFloat(priceElement.innerText.replace("SR", ""));
            total = total+ price;
        }
            total = Math.round(total*100)/100;
            document.getElementsByClassName("total-price")[0].innerText = "SR" + total;
        
    }
    