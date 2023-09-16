<base href="/public">
@extends('home.masterpage')

<!DOCTYPE html>
<html>
<head>
    <style>
        /* تخصيص الكارد بواسطة CSS */
        .card {
            border: 1px solid #cda45e;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 10px;
            width: 300px;
            margin: 20px;
            background-color:rgba(245, 245, 220, 0);
        }
        .card:hover{
         background-color:rgba(28, 28, 28, 0.8);
         transition: 0.5s;
        }
        .card h2 {
            color:#cda45e;
            text-align: center
        }


        /* تخصيص الصورة بواسطة CSS */
        .card img {
            max-width: 100%;
            height: 250px;
            margin-top: 10px;
            border-radius:3%
        }
        .res{
            display: flex;
            margin-left:2%;
        }
        body{
         margin-top:10%;

        }

@media only screen and (max-width: 767px) {
    ul{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
}

    </style>
</head>
<body>
<section style="margin-top: 12%">

   



            </div>
        </a>
    </li>

</body>
</html>
</section>
