<section class="section" id="men">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Men's Latest</h2>
                    <span>Details to details is what makes Hexashop different from the other themes.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="men-item-carousel">
                    <div class="owl-men-item owl-carousel">
                        @foreach ($pd as $pds)
                        @if ($pds->category == '2')
                        
                 
                        <div class="item card p-3">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="{{url('pd_details', $pds->id)}}">
                                            <i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                        <li><a href="{{url('/add_cart', $pds->id)}}">
                                            <i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img class="image"src="product/img/{{$pds->image}}" alt="">
                            </div>
                            <div class="down-content">
                                <h3>{{$pds->name}}</h3>
                                <span>${{$pds->price}}</span>
                                <br>
                                <ul class="stars mt-3 mr-3">
                                    <br>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    .image{
        padding: 30px;
        width: 200px;
        height: 280px;
    }
</style>