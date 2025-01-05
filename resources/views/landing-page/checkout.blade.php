<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/bb515311f9.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: url('/assets-landingpage/img/1.jpg');
            background-position: center;
            background-size: cover;
            backdrop-filter: blur(8px);
            display: flex;
            justify-content: center;
            height: 100vh;
            font-family: 'Monsterrat', sans-serif;
            position: relative;
            padding: 2rem 0;
        }

        .price {
            text-align: end;
        }

        td {
            color: #64645f !important;
        }

    </style>
</head>

<body>
    <div class="checkout-container card w-50 mt-5" style="height: max-content">
        <div class="right-side card-body">
            <div class="receipt">
                <h4 class="receipt-heading">Receipt Summary</h4>
                <div>
                    <table class="table table-borderless" style="border-bottom: 1px solid black;">
                        <tr>
                            <td>Tiket Gunung Kerinci</td>
                            <td class="price">Rp 50.000</td>
                        </tr>
                        <tr>
                            <td>Jumlah Tiket</td>
                            <td class="price">x 2</td>
                        </tr>
                        <tr>
                            <td>Subtotal</td>
                            <td class="price">Rp 100.000</td>
                        </tr>
                        <tr class="total" style="font-weight: 700;">
                            <td>Total</td>
                            <td class="price">Rp 100.000</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="payment-info">
                <h4 class="payment-heading">Payment Detail</h4>
                <form class="form-box" enctype="text/plain" method="get" target="_blank">
                    <div class="mb-3">
                        <label for="full-name">Full Name</label>
                        <input id="full-name" name="full-name" placeholder="Satoshi Nakamoto" required type="text"
                            class="form-control" />
                    </div>

                    <div class="mb-3">
                        <label for="credit-card-num">Payment Mathod
                        </label>
                        <select name="" id="" class="form-control">
                            <option value="">OVO</option>
                            <option value="">DANA</option>
                            <option value="">MANDIRI</option>
                            <option value="">BCA</option>
                        </select>
                    </div>
                        <a href="/checkout-sukses" class="btn w-100 text-white" style="background-color: #4c616b;">
                            <i class="fa-solid fa-lock"></i> Pay Now
                        </a>
                </form>

                <p class="footer-text text-center">
                    <i class="fa-solid fa-lock"></i>
                    Your credit card infomration is encrypted
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
