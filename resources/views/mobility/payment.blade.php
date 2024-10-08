<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/payment.css')}}">
</head>
<body>
    <div class='container'>
        <div class='window'>
          <div class='order-info'>
            <div class='order-info-content'>
              <h2>Pay in INR </h2>
              <h2>For Booked Your Appointment</h2>
                      <div class='line'></div>
             <img src="{{asset('mobility_assets/barcode1.jpg')}}" style="height: 350px" alt="">
              <div class='line'></div>
              <div class='total'>

              </div>
      </div>
      </div>
              <div class='credit-info'>
                <div class='credit-info-content'>
                   <h1>Send Screenshot And Sheduletime On whatsup  </h1>
                   <h1 style="justify-content: center; "> Whatsup Click here ↓ <a href="https://wa.me/919137412304" title="Share on whatsapp" style="text-decoration:none;color:antiquewhite;"><button  style="background:green;margin:1rem;padding:1rem 1.3rem;font-size:1.3rem;border-radius:10px;border:none;box-shadow: 5px 7px 15px black">&nbsp; 9137412304</buton>  </a></h1>

                 <a href="{{route('index')}}"> <button class='pay-btn'>Go Home</button></a>

                </div>

              </div>
            </div>
      </div>
      <script src="{{asset('js/payment.js')}}"></script>
</body>
</html>
