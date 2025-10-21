 <div class="container">
            <div class="tabs-header">
                <div class="tab-buttons">
                    <button class="tab-button active" data-tab="description">
                        <i class="fas fa-info-circle"></i>
                        <span>Mô tả sản phẩm</span>
                    </button>
                    <button class="tab-button" data-tab="reviews">
                        <i class="fas fa-star"></i>
                        <span>Đánh giá & Bình luận</span>
                        <span class="review-count">(127)</span>
                    </button>
                </div>
            </div>

            <div class="tab-content active" id="description" style="white-space: pre-line;">
               {{$product->content}}
            </div>

            <div class="tab-content" id="reviews">
                <div class="reviews-summary">
                    <div class="reviews-header">
                        <h3>Đánh giá sản phẩm</h3>
                        <div class="reviews-stats">
                            <span class="total-reviews">127 đánh giá</span>
                            <span class="average-rating">4.8/5</span>
                        </div>
                    </div>
                    <div class="rating-overview">
                        <div class="rating-score">
                            <span class="score">4.8</span>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>Dựa trên 127 đánh giá</p>
                            <div class="rating-distribution">
                                <div class="rating-bar">
                                    <span>5 sao</span>
                                    <div class="bar"><div class="fill" style="width: 85%"></div></div>
                                    <span>108</span>
                                </div>
                                <div class="rating-bar">
                                    <span>4 sao</span>
                                    <div class="bar"><div class="fill" style="width: 12%"></div></div>
                                    <span>15</span>
                                </div>
                                <div class="rating-bar">
                                    <span>3 sao</span>
                                    <div class="bar"><div class="fill" style="width: 2%"></div></div>
                                    <span>3</span>
                                </div>
                                <div class="rating-bar">
                                    <span>2 sao</span>
                                    <div class="bar"><div class="fill" style="width: 1%"></div></div>
                                    <span>1</span>
                                </div>
                                <div class="rating-bar">
                                    <span>1 sao</span>
                                    <div class="bar"><div class="fill" style="width: 0%"></div></div>
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                        <div class="rating-features">
                            <div class="feature-rating">
                                <span>Chất lượng sách</span>
                                <div class="feature-stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>4.9</span>
                                </div>
                            </div>
                            <div class="feature-rating">
                                <span>Nội dung</span>
                                <div class="feature-stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>4.8</span>
                                </div>
                            </div>
                            <div class="feature-rating">
                                <span>Giá cả</span>
                                <div class="feature-stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>4.2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="reviews-list">
                    <div class="reviews-controls">
                        <h4>Bình luận của khách hàng</h4>
                        <div class="reviews-filters">
                            <select class="filter-select">
                                <option value="all">Tất cả đánh giá</option>
                                <option value="5">5 sao</option>
                                <option value="4">4 sao</option>
                                <option value="3">3 sao</option>
                                <option value="2">2 sao</option>
                                <option value="1">1 sao</option>
                            </select>
                            <select class="sort-select">
                                <option value="newest">Mới nhất</option>
                                <option value="oldest">Cũ nhất</option>
                                <option value="highest">Đánh giá cao</option>
                                <option value="lowest">Đánh giá thấp</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="reviews-container">
                        <div class="review-item" data-rating="5">
                            <div class="review-header">
                                <div class="reviewer-info">
                                    <img src="{{asset('frontend/asset/images/User.png')}}" alt="Nguyễn Văn A">
                                    <div>
                                        <h5>Nguyễn Văn A</h5>
                                        <div class="review-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-meta">
                                    <span class="review-date">15/12/2023</span>
                                    <div class="review-actions">
                                        <button class="like-btn" data-likes="12">
                                            <i class="far fa-thumbs-up"></i>
                                            <span>12</span>
                                        </button>
                                        <button class="reply-btn">
                                            <i class="far fa-reply"></i>
                                            Trả lời
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <p class="review-content">Sách rất hay, con tôi rất thích đọc. Hình ảnh đẹp, nội dung ý nghĩa. Đây là cuốn sách truyền thống tốt để dạy con về đạo đức. Tôi đã mua nhiều cuốn để tặng bạn bè.</p>
                            <div class="review-tags">
                                <span class="tag">Chất lượng tốt</span>
                                <span class="tag">Nội dung hay</span>
                                <span class="tag">Phù hợp trẻ em</span>
                            </div>
                        </div>
                        
                        <div class="review-item" data-rating="5">
                            <div class="review-header">
                                <div class="reviewer-info">
                                    <img src="{{asset('frontend/asset/images/User.png')}}" alt="Trần Thị B">
                                    <div>
                                        <h5>Trần Thị B</h5>
                                        <div class="review-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-meta">
                                    <span class="review-date">10/12/2023</span>
                                    <div class="review-actions">
                                        <button class="like-btn" data-likes="8">
                                            <i class="far fa-thumbs-up"></i>
                                            <span>8</span>
                                        </button>
                                        <button class="reply-btn">
                                            <i class="far fa-reply"></i>
                                            Trả lời
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <p class="review-content">Chất lượng sách tốt, giấy đẹp, in rõ nét. Con gái tôi đã đọc đi đọc lại nhiều lần. Rất đáng mua! Giao hàng nhanh, đóng gói cẩn thận.</p>
                            <div class="review-tags">
                                <span class="tag">Giao hàng nhanh</span>
                                <span class="tag">Đóng gói tốt</span>
                            </div>
                        </div>
                        
                        <div class="review-item" data-rating="4">
                            <div class="review-header">
                                <div class="reviewer-info">
                                    <img src="{{asset('frontend/asset/images/User.png')}}" alt="Lê Văn C">
                                    <div>
                                        <h5>Lê Văn C</h5>
                                        <div class="review-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-meta">
                                    <span class="review-date">05/12/2023</span>
                                    <div class="review-actions">
                                        <button class="like-btn" data-likes="3">
                                            <i class="far fa-thumbs-up"></i>
                                            <span>3</span>
                                        </button>
                                        <button class="reply-btn">
                                            <i class="far fa-reply"></i>
                                            Trả lời
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <p class="review-content">Sách hay nhưng giá hơi cao so với các sách truyện cổ tích khác. Tuy nhiên chất lượng tốt nên vẫn đáng mua. Nội dung phù hợp với trẻ em.</p>
                            <div class="review-tags">
                                <span class="tag">Giá hơi cao</span>
                                <span class="tag">Chất lượng tốt</span>
                            </div>
                        </div>
                        
                        <div class="review-item" data-rating="5">
                            <div class="review-header">
                                <div class="reviewer-info">
                                    <img src="{{asset('frontend/asset/images/User.png')}}" alt="Phạm Thị D">
                                    <div>
                                        <h5>Phạm Thị D</h5>
                                        <div class="review-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-meta">
                                    <span class="review-date">01/12/2023</span>
                                    <div class="review-actions">
                                        <button class="like-btn" data-likes="15">
                                            <i class="far fa-thumbs-up"></i>
                                            <span>15</span>
                                        </button>
                                        <button class="reply-btn">
                                            <i class="far fa-reply"></i>
                                            Trả lời
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <p class="review-content">Cuốn sách này thực sự tuyệt vời! Con trai tôi rất thích và đã học được nhiều bài học quý giá từ câu chuyện. Hình ảnh minh họa rất đẹp và sinh động.</p>
                            <div class="review-tags">
                                <span class="tag">Hình ảnh đẹp</span>
                                <span class="tag">Bài học quý giá</span>
                                <span class="tag">Trẻ em thích</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="load-more-reviews">
                        <button class="btn-load-more">
                            <i class="fas fa-plus"></i>
                            Xem thêm đánh giá
                        </button>
                    </div>
                    
                    <div class="review-form">
                        <h4>Viết đánh giá của bạn</h4>
                        <form>
                            <div class="form-group">
                                <label>Đánh giá của bạn:</label>
                                <div class="star-rating">
                                    <i class="far fa-star" data-rating="1"></i>
                                    <i class="far fa-star" data-rating="2"></i>
                                    <i class="far fa-star" data-rating="3"></i>
                                    <i class="far fa-star" data-rating="4"></i>
                                    <i class="far fa-star" data-rating="5"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="review-text">Bình luận:</label>
                                <textarea id="review-text" rows="4" placeholder="Chia sẻ cảm nhận của bạn về sản phẩm..."></textarea>
                            </div>
                            <button type="submit" class="btn-submit-review">Gửi đánh giá</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!---------------------------------Related Products Section------------------------------------->
    <section class="related-products">
        <div class="container">
            <h2 class="section-title">Sản Phẩm Nổi Bật</h2>
            <div class="products-grid">
               @foreach($products as $product)
                <div class="product-item" data-product-id="book1" data-price="150000">
                    <a href="/product/{{$product ->id}}"><img src="{{asset($product ->image)}}" alt="Tấm Cám - Truyện Cổ Tích"><a>
                    <h4><a href="/product/{{$product ->id}}">{{$product ->name}}</a></h4>
                    <p style="font-size: 12px">MSP: {{$product ->masanpham}}</p>
                    <div class="price">
                        <p><span class="new-price">{{$product ->price_sale}}<sup>đ</sup></span> <span class="old-price">{{$product ->price_normal}}<sup>đ</sup></span></p>
                    </div>
                    <div class="product-actionss">  
                       <a href="/product/{{$product ->id}}"> <button class="btn btn-primary btn-view-detail">Xem chi tiết</button></a>
                        <form action="/cart/add" method="post" style="display:inline-block">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <input type="hidden" name="product_qty" value="1">
                            <button type="submit" class="btn btn-secondary">Thêm Vào Giỏ</button>
                        </form>
                    </div>
                </div>
               @endforeach
            </div>
        </div>