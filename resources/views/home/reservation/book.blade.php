@extends('home.masterpage')
<base href="/public">
<style>
#date::-webkit-calendar-picker-indicator {
    color: white;
}</style>
<body>


  <main id="main">
<br>
<br>
<br>
<br>

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reservation</h2>
          <p>Book a Table</p>
        </div>

        <form id="myForm" action="{{ route('reservation.store') }}" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
            @csrf
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control"  value=" {{ Auth::user()->name }}" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email"  value=" {{ Auth::user()->email }}" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
                <input name="date" class="form-control" id="date" placeholder="Date" type="datetime-local" min="2023-09-01T00:00" max="9999-12-31T23:59" >
                <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" name="restaurant" class="form-control" value="{{ $restaurants->name}}" >

                <div class="validate"></div>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="number" class="form-control" name="people" id="people" placeholder="# of people" min="1" data-msg="Please enter at least 1">
                <div class="validate"></div>
              </div>

          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div id="error-message" style="color: red;"></div>
          <div class="text-center"><a  href="{{url('/bookdet',$restaurants->id)}}" style="color: white"><button type="submit" value="Save"> Book a Table</button></div></a>

        </form>


      </div>
    </section><!-- End Book A Table Section -->







  </main><!-- End #main -->
{{--
 @section('contentfooter')
 @endsection; --}}

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
   document.addEventListener("DOMContentLoaded", function() {
    const dateInput = document.getElementById("date");
    const form = document.getElementById("myForm");
    const errorMessage = document.getElementById("error-message");

    // يتم تنفيذ هذه الوظيفة عند النقر على زر "Book a Table"
    form.addEventListener("submit", function(event) {
        // منع التصرف الافتراضي لإرسال النموذج
        event.preventDefault();

        // افحص هنا البيانات المدخلة وتأكد من أنها صحيحة
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const phone = document.getElementById("phone").value;
        const date = document.getElementById("date").value;
        const people = document.getElementById("people").value;

        // يمكنك إضافة المزيد من الاختبارات هنا حسب احتياجاتك

        // إذا تم تعبئة البيانات بشكل صحيح، قم بإرسال النموذج
        if (name && email && phone && date&& people) {
            form.submit();
        } else {
            errorMessage.textContent = "Please fill out all required fields.";
        }
    });

    // يتم تنفيذ هذه الوظيفة عندما يتم فقد الفوكس عن حقل النص
    dateInput.addEventListener("blur", function() {
        // الحصول على قيمة التاريخ من الحقل النصي
        const dateValue = dateInput.value;

        // إذا كان التاريخ غير فارغ
        if (dateValue.trim() !== "") {
            // تحويل التاريخ إلى كائن تاريخ Date
            const inputDate = new Date(dateValue);

            // تاريخ اليوم
            const today = new Date();

            // قارن بين التاريخ المدخل وتاريخ اليوم
            if (inputDate < today) {
                // إذا كان التاريخ أقدم من اليوم، عرض رسالة خطأ
                errorMessage.textContent = "You cannot select a past date. ";
                // قم بمسح محتوى الحقل النصي
                dateInput.value = "";
            }
        }
    });
});

</script>




</body>

</html>
