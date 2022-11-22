$(document).ready(function(){
    // Header active
    let nav_item = $(".nav-item");
    for (var i = 0; i < nav_item.length; i++) {
        $(nav_item[i]).click((event) => {
            let nav_link = event.currentTarget.children;
            $(nav_link).addClass("active");
            removeClassNavBar(event.currentTarget);

            $(".nav").css("display", "none");
        });
    }

    function removeClassNavBar(item) {
        for (var i = 0; i < nav_item.length; i++) {
            if(nav_item[i] != item) {
                $(nav_item[i]).children().removeClass("active");
            }
        }
    }

    // Navbar responsive
    $("#navbar-toggler").click(() => {
        $(".nav").toggle();
    })

    // Modal
    let modal = `
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h1 class="modal-title offset-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="food-item">
                                <div class="food-img">
                                    <img src="./img/products/banhmi.jpg" alt="" />
                                </div>
                                <div class="food-content">
                                    <div class="food-name">Bánh mì</div>
                                    <div class="food-price"><b>15.000 đ</b></div>
                                    <div class="food-desc"></div>
                                </div>
                                <div class="number-input-up-down">
                                    <a class="btn-minus disabled"><i class="fas fa-minus"></i></a>
                                    <input type="number" class="food-qty" readonly value="1" />
                                    <a class="btn-plus"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="food-custom">
                                <div class="flex-view">
                                    <div class="title">Ghi chú thêm (nếu có)</div>
                                    <textarea class="input-auto-grow food-note" rows="1" placeholder="Ví dụ: để đá riêng, ..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-custom">Add to Cart</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    `;

    let product_items = $(".product-item");

    for (var i = 0; i < product_items.length; i++) {
        $(product_items[i]).parent().append(modal);
    }


    // Change quantity number dish
    function checkDisabled(input) {
        if(input.value < 2)
            $(input).prev().addClass("disabled");
        else if(input.value > 9)
            $(input).next().addClass("disabled");
        else {
            $(input).prev().removeClass("disabled");
            $(input).next().removeClass("disabled");
        }
    }

    function minus(input) {
        if(input.value > 1)
            input.value--;
        checkDisabled(input);
    }
    function plus(input) {
        if(input.value < 10)
            input.value++;
        checkDisabled(input);
    }

    let input_qty_dish = $("input.food-qty");
    let btn_minus = $(".btn-minus");
    for(let i = 0; i < btn_minus.length; i++) {
        $(btn_minus[i]).click(() => minus(input_qty_dish[i]));
    }

    let btn_plus = $(".btn-plus");
    for(let i = 0; i < btn_plus.length; i++) {
        $(btn_plus[i]).click(() => plus(input_qty_dish[i]));
    }

    // Checkout
    // Input form
    let input_group = $(".input-group");
    for(let i = 0; i < input_group.length; i++) {
        $(input_group[i]).children("input").focus((event) => {
            $(event.currentTarget).parent().addClass("input-group-focus")
            for (let j = 0; j < input_group.length; j++)
            {
                if(j != i && $(input_group[j]).children("input").val().trim() == "")
                    $(input_group[j]).removeClass("input-group-focus");
            }
        });
    }

    // Payment Method
    // init
    $("#pay-cash").prop("checked", true);
    $("#pay-cash").parent().addClass("payment-method-active");

    function PaymentMethod(inputA, inputB) {
        $(inputA).prop('checked', true);
        $(inputB).prop('checked', false);
        $(inputA).parent().addClass("payment-method-active");
        $(inputB).parent().removeClass("payment-method-active");
    }

    $("#pay-cash").click(() => PaymentMethod($("#pay-cash"), $("#pay-card")));
    $("#pay-card").click(() => PaymentMethod($("#pay-card"), $("#pay-cash")));
});
