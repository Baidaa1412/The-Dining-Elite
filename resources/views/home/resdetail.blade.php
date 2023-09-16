<base href="/public">
@extends('home.masterpage')

<style>
body {
    font-family: 'Montserrat', sans-serif;
}


.container1{
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    width: 600px;
    height: 450px;
    background-color:none;
    border-radius: 10px ;
    border: #cda45e 2px solid;
    margin-top:12%

}

img{
    height:446px;
    width: 100%;
    background-size: cover;
    background-position: center;
  border-radius: 10px 0px 0px 10px;
}

.right-side {
    margin: 20px 32px 32px 32px;
}

#perfume {
    font-size: 12px;
    letter-spacing: 5px;
    color: hsl(228, 12%, 48%);
}

#header {
    font-family: 'Fraunces', serif;
    line-height: 1;
    color:#cda45e;
    margin-bottom: 25px;
}

#description {
    font-size: 14px;
    color: hsl(228, 12%, 48%);
    line-height: 1.5;
    margin-bottom: 5px;
}


#number-discount, #number-full {
    display: inline-block;
    vertical-align: middle;
}

#number-discount {
    color: hsl(158, 36%, 37%);
    font-family: 'Fraunces', serif;
    margin-right: 10px;
}

#number-full {
    font-size: 14px;
    color: hsl(228, 12%, 48%);
    text-decoration: line-through;
}

.cart-btn {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
    width: 100%;
    height: 50px;
    border-radius: 10px;
    border: none;
    background-color: #cda45e;
    color: white;
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    transition: background-color 0.2s;
    margin-top: 50%;
    position:sticky;
     padding: 8px 25px;
     text-transform: uppercase;
      font-size: 13px;
     font-weight: 500;
    letter-spacing: 1px;
  transition: 0.3s;
}


.cart-btn:hover {
    background-color: #9d804e;
    cursor: pointer;
    border: #cda45e 1px solid;
    transition: 0.3s;

}


@media only screen and (max-width: 767px) {

    .container1{
      grid-template-columns: 1fr;
      width: 345px;
      height: 610px;
      margin-top: 35%;
    }


    img{
        height: 240px;
        border-radius: 10px 10px 0 0;
    }

    #perfume {
        margin-top: 5px;
        margin-bottom: -10px;
    }

    #description {
        margin-top: -8px;
        margin-bottom: -1px;
    }

    .price {
        margin-bottom: -8px;
    }

    .cart-btn {
        height: 48px;
        margin-top:100px;
    }
  }</style>

<body >

    <body>
        <div class="container1">
            <div class="left-side">
                <img src="{{ $restaurants->image }}">
            </div>
            <div class="right-side">
                <p id="perfume">{{ $restaurants->location }}</p>
                <h1 id="header">{{ $restaurants->name }}</h1>
                <p id="description">{{ $restaurants->description }}</p>
                <div class="price">
                    <!-- Add restaurant-specific pricing information here if needed -->
                </div>
                <a href="{{ Auth::check() ? '/book/' . urlencode($restaurants->id) : '/register' }}">

                {{-- <a href="{{ url('/book',$restaurants->id) }}"> --}}
                    <button class="cart-btn">Book Now</button>
                </a>

            </div>
        </div>
    </body>


