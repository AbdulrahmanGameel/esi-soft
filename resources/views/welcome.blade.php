@extends('layouts.app')
@section('content')


  

<!-- Masthead -->
<header class=" text-center">
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <h1 class="mb-5">برامج إيزي سوفت لإدارة نقاط البيع
        </h1>
        <h3>
          سواء كان مجال نشاط مؤسستك هو التجزئة أوالعمليات أوالخدمات الغذائية، مثل المحال التجارية بأنواعها، والمطاعم،
          والسوبر ماركت، والتي قد تواجه العديد من التعقيدات التشغيلية المشتركة والفردية
        </h3>
      </div>
    </div>
  </div>
</header>

<!-- Icons Grid -->
<section class="features-icons bg-light text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
          <div class="features-icons-icon d-flex">
            <i class="iconify m-auto background-ico" data-icon="mdi:inbox-multiple-outline" data-inline="false"></i>

          </div>
          <div class="forground-txt">

            <h3>إدارة المخزون بكفاءة عالية
            </h3>
            <p class="lead mb-0">توفير المعلومات المطلوبة لتحليل فعالية العمل</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
          <div class="features-icons-icon d-flex">
            <i class="iconify background-ico icon-check m-auto" data-icon="mdi:cash" data-inline="false"></i>
          </div>

          <div class="forground-txt">

            <h3>تحكم كلي في الإيرادات والمصروفات
            </h3>
            <p class="lead mb-0">
              دقة تامة لحسابات الموردين، وحسابات العملاء</p>
            <p class="lead mb-0">حماية تامة من تلاعب الكاشير</p>
          </div>

        </div>
      </div>
      <div class="col-lg-4">
        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
          <div class="features-icons-icon d-flex">
            <i class="iconify m-auto background-ico" data-icon="mdi:spider-web" data-inline="false"></i>
          </div>

          <div class="forground-txt">

            <h3>إدارة مركزية للفروع بأقل مجهود</h3>
            <p class="lead mb-0">ربط الفروع المتعددة بالإدارة والمخازن</p>
            <p class="lead mb-0">إدارة مركزية للفروع بأقل مجهود</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 ">
      </div>
      <div class="col-lg-4 text-center">
        <div class="features-icons-item mx-auto mb-0 mb-lg-3 ">
          <div class="features-icons-icon d-flex">
            <i class="background-ico icon-check m-auto iconify" data-icon="mdi:home-automation" data-inline="false"></i>
          </div>
          <div class="forground-txt">

            <h3>ميكنة مهام محددة للحد من الخطأ البشري وتكلفة العمالة</h3>
            <p class="lead mb-0">دعم فني على مدارالساعة 24/7 عن طريق النت</p>
            <p class="lead mb-0">توفير المعلومات المطلوبة لتحليل فعالية العمل</p>
            <p class="lead mb-0">تأمين بيانات البرنامج لأقصى درجة</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Image Showcases -->
<div class="row text-center">

  <a class="container col-md-4" href="restaurant">

    <div class="card card-clickable">
      <img src="storage/productImages/resturaunt.png" class="card-img-top order-lg-2" alt="...">
      <div class="card-body">
        <h2>برنامج للمطاعم والكوفي شوب</h2>
      </div>
    </div>
  </a>

  <a class="container col-md-4" href="scales">
    <div class="card card-clickable">
      <img src="/storage/productImages/scale.png" class="card-img-top order-lg-2" alt="...">
      <div class="card-body">
        <h2 class="card-text">موازين الكترونية وموازين الباركود</h2>
      </div>
    </div>
  </a>

  <a class="container col-md-4" href="supermarket">
    <div class="card card-clickable">
      <img src="/storage/productImages/market.png" class="card-img-top order-lg-2" alt="...">
      <div class="card-body">
        <h2>برنامج إدارة السوبر ماركت</h2>
      </div>
    </div>
  </a>
</div>
<div class="row text-center">

  <a class=" container col-md-12  text-center" href="our_products">
    <div class=" custom-height card card-clickable">
      <h1>جميع منتاجتنا</h1>
    </div>
  </a>
</div>

</div>

@endsection