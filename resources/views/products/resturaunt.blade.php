@extends('layouts.app')
@section('content')

{{-- resturaunt page --}}
<div class="container">
    {{-- top image --}}
    <img src="/storage/productImages/food.png" class="card-img-top order-lg-2" alt="...">

    {{-- versions container --}}
    <div class="versions text-center container">
        {{-- versions row --}}
        <div class="row" id="versions">
            {{-- ESI-POS version column --}}
            <div class="col-md-4">
                <a class="card card-clickable col-info-card" id="ESI-POS" data-aos="fade-in">
                    <div class="card-header">
                        <h3>
                            ESI POS
                        </h3>
                    </div>

                    <div class="card-body">
                        <h4 class="card-title">
                            يحتوي علي جميع الإمكانيات التي تساعدك علي إدارة منشأتك
                        </h4>
                        <p class="card-text card-text-info">
                            تقوم النسخة الأساسية بتوفير جميع الأدوات التي يحتاجها أي صاحب منشأة لكي يستطيع المالك من
                            تأمين و التحكم في منشأتة
                        </p>
                        <br>
                    </div>
                </a>
            </div>
            {{-- Pro version column --}}
            <div class="col-md-4">
                <a id="ESI-POS-Pro" class="card card-clickable col-info-card" data-aos="fade-in">
                    <div class="card-header">
                        <h3>
                            ESI POS Pro
                        </h3>
                    </div>

                    <div class="card-body">
                        <h4 class="card-title ">
                            يحتوي علي جميع الإمكانيات الموجودة <br> بـESI POS
                        </h4>
                        <p class="card-text card-text-info">
                            بالإضافة إلي إمكانية التحكم في الأصناف التي تدخل و استهلاكها عند تحضير المنتجات
                        </p>
                        <br>
                    </div>
                </a>
            </div>
            {{-- Ultimate version column --}}
            <div class="col-md-4">
                <a id="ESI-POS-Ultimate" class="card card-clickable col-info-card" data-aos="fade-in">
                    <div class="card-header">
                        <h3>
                            ESI POS Ultimate
                        </h3>
                    </div>

                    <div class="card-body">
                        <h4 class="card-title ">
                            يحتوي علي جميع الإمكانيات التي يقدمها برنامجنا
                        </h4>
                        <p class="card-text card-text-info">
                            يحتوي علي جميع الصلاحيات الخاصة بـESI POS و ESI POS Pro و المزيد
                        </p>
                        <br>
                    </div>
                </a>
            </div>
        </div>
    </div>


    {{-- basic-features div --}}
    <div class="basic-features text-center">
        <h4 data-aos="fade-up">
            يقوم البرنامج بالعمل عن طريق توصيل جهاز server أساسي بجهاز\أجهزة client(s) لخلق نظام شبكة داخلية للتحكم في
            جميع نواحي العمل.
        </h4>

        <h3 data-aos="fade-up">
            ESI-POS
        </h3>

        <div class="card" data-aos="fade-up">
            <div class="card-header">
                <h3>
                    المبيعات
                </h3>
            </div>
            <div class="card-body">
                <h5>نظم لإدارة التيك أوي، الصاله و توصيل الطلبات.</h5>

                <h5>المدفوعات بأشكالها (مباشرة، اجلة،فيزا، اوفيسر شك، إلخ). </h5>
                <h5> أقسام التشغيل (بار، شيشة، مطبخ، إلخ). إدارة الاصناف و تعديلها. </h5>
                <br>
            </div>
        </div>
        <div class="card" data-aos="fade-up">
            <div class="card-header">
                <h3>
                    الأمان
                </h3>
            </div>
            <div class="card-body">
                <h4 class="card-title">يضمن لك النظام الحماية عبر تحديد الصلاحيات</h4>
                <p class="card-text">كل مستخدم للبرنامج له حساب خاص يمكنك من متابعة العمليات التي قام بها المستخدم.
                    و يمنح طبقة من الأمن حيث أن كل مستخدم لا يستطع الدخول إلا على الأجزاء المصرح له بها،
                    و ذلك عبر تحديد صلاحيات كل مستخدم عن طريق الأدمن.
                    و كل مستخدم له خزينة خاصة به تمكنك من تتبع
                    ارادته و تقدم لك تقرير بتفصيل العمليات التي قام بها.</p>
                <br>
            </div>
        </div>
        <div class="card" data-aos="fade-up">
            <div class="card-header">
                <h3>
                    الفواتير
                </h3>
            </div>
            <div class="card-body">
                <h4 class="card-title">يمنحك النظام التحكم الكامل في فواتيرك</h4>
                <p class="card-text">إمكانية التحكم في الخصومات على مستوى صنف أو اصناف داخل الفاتورة أوحتي على مستوى
                    الفاتورة بأكملها،
                    و تحديد الحجم الأقصى للخصم على حسب المستخدم. و يمكن تقسيم الفاتورة على أكثر من عميل،
                    فتح أكثر من فاتورة لنفس الطاولة أو حتى تحويل فاتورة لطاولة أخرى.
                    يمكنكم البرنامج أيضاً من تقديم فواتير ضيافة لا تضاف قيمتها على الاردت و لكن تؤثر فالمخزون.
                    هنالك إمكانية التحكم في نسبة الضريبة والخدمة للصاله. و إضافة طلبات خاصة و ملاحظات على كل صنف في أمر
                    التشغيل.</p>
                <br>
            </div>
        </div>
        <div class="card" data-aos="fade-up">
            <div class="card-header">
                <h3>
                    الأصناف
                </h3>
            </div>
            <div class="card-body">
                <h4 class="card-title">ترتيب الأصناف علي شكل شجرة</h4>
                <p class="card-text">تنظيم المعلومات بهذة الطريقة يجعل في قدرة المستخدمين الدخول علي الأصناف و تعديل
                    معلوماتها بكل سهولة</p>
                <br>
            </div>
        </div>

        <div class="card" data-aos="fade-up">
            <div class="card-header">
                <h3>
                    الفروع
                </h3>
            </div>
            <div class="card-body">
                <h4 class="card-title">
                    إدارة مركزية لكافة الفروع
                </h4>
                <p class="card-text">

                    ربط الفروع المتعددة بغض النظر عن الموقع الجغرافي، بحيث تتفرغ الفروع لعميات البيع فقط و هذا يتيح لك
                    التحكم الكامل في الفروع بحيث يتم إضافة الصنف في المركز الرئيسي فيظهر في كافة الفروع، وكذلك عند تغيير
                    سعر صنف في المركز الرئيسي فتظهر تلك التغييرات في كافة الفروع
                </p>
                <br>
            </div>
        </div>

    </div>

    {{-- pro-features div --}}
    <div class="pro-features text-center">
        <h3 data-aos="fade-up">
            ESI-POS Pro
        </h3>
        <h4 data-aos="fade-up">
            تتيح لك هذة النسخة القيام بعمل وصفات لمنجاتك النهائية
        </h4>

        <div class="card" data-aos="fade-up">
            <div class="card-header">
                <h3>
                    الأصناف
                </h3>
            </div>
            <div class="card-body">
                <h4 class="card-title">
                    تتبع كامل لجميع الخامات و ادخالها الي وصفات منتجاتك
                </h4>
                <p class="card-text">
                    تحديد مكونات كل صنف من الخامات، وخصمها خصماً مباشراً فور بيع المنتج النهائي و إمكانية الاختيار بين
                    أكثر من مكون للصنف، مثال: شيشة ميكس، يمكن أختيار نكهتين من بين أكثر من 20 نكهة.
                </p>
                <p class="card-text">
                    و يعطيك القدرة علي استبدال أو إضافة أو حذف مكونـ(ات) من المنتج النهائي
                </p>
                <br>
            </div>
        </div>
    </div>
    {{-- ultimate-features div --}}
    <div class="ultimate-features text-center">
        <h3 data-aos="fade-up">
            ESI-POS Ultimate
        </h3>
        <div class="card" data-aos="fade-up">
            <div class="card-header">
                <h3>
                    التصنيع
                </h3>
            </div>
            <div class="card-body">
                <p class="card-text">
                    إمكانية تصنيع منتج من خامات، بحيث يتم خصم الخامات من مخزن الخامات وإضافة المنتج المصنع إلى مخزن
                    المنتجات، على سبيل المثال تصنيع سلطة خضراء، حيث يتم خصم 2ك طماطم، 1ك خيار، نصف كيلو بصل، كابوتشا،
                    ... الخ ويتم إنتاج 50 بورسيون سلطة خضراء
                </p>
                <p class="card-text">
                    إمكانية تحديد الأطباق الجانبية للأصناف الرئيسية
                </p>
                <br>
            </div>
        </div>

    </div>
</div>

@endsection