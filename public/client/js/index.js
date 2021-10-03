$(function(){
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
                                    <img src="{{asset('client/img/products/banhmi.jpg')}}" alt="" />
                                </div>
                                <div class="food-content">
                                    <div class="food-name">Bánh mì</div>
                                    <div class="food-price"><b>15.000 đ</b></div>
                                    <div class="food-desc"></div>
                                </div>
                                <div class="number-input-up-down">
                                    <a class="disabled"><i class="fas fa-minus"></i></a>
                                    <input type="number" class="food-qty" readonly value="1" />
                                    <a><i class="fas fa-plus"></i></a>
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
});
