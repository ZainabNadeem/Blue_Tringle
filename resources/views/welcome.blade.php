<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="content-language" content="en,de,fr,Arb" />

    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blue Tringle</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="javescrupt" href="{{ asset('js/Search_event_lag.js') }}">
   
  </head>
  <body>
<div class="container">
       
        <!-- logo begin -->
           <div id="logo" >
            <a href="#">
                <img class="right" src="{{ asset('images/LOGO.svg') }}" alt="yy">
            </a>
          </div>
        <!-- logo close -->
      <div class="Zano1">  
        <section class="navbar-Right">
          <span class="overlay"></span>
          <div class="menu" id="menu">
             <div class="menu-header">
                <span class="menu-arrow"><i class="bx bx-chevron-left"></i></span>
                <span class="menu-title"></span>
             </div>
             <ul class="menu-inner">
                <li class="menu-item"><a href="#" class="menu-link">الرئسية</a></li>
                <li class="menu-item"><a href="#" class="menu-link">من نحن</a></li>
                <li class="menu-item menu-dropdown">
                   <span class="menu-link">الوكالات<i class="bx bx-chevron-right"></i></span>
                   <div class="submenu megamenu megamenu-column-4">
                     <a href="#" class="submenu-link"> <img src="{{ asset('images/HD-DEVELON.svg') }}" alt="yy"></a>
                     <a href="#" class="submenu-link"> <img src="{{ asset('images/Bobcat_one_tough_animal_Black.svg') }}" alt="yy"></a>
                     <a href="#" class="submenu-link"> <img src="{{ asset('images/Bomag.svg') }}" alt="yy"></a>
                     <a href="#" class="submenu-link"> <img src="{{ asset('images/E-FARMTRAC.svg') }}" alt="yy"></a>
                     <a href="#" class="submenu-link"> <img src="{{ asset('images/copaz.svg') }}" alt="yy"></a>
                    <!--- <a href="#" class="submenu-link"> <img src="{{ asset('images/Bobcat_one_tough_animal_Black.svg') }}" alt="yy"></a>
                     <a href="#" class="submenu-link"> <img src="{{ asset('images/Bobcat_one_tough_animal_Black.svg') }}" alt="yy"></a>
                      ---><div class="submenu-inner">
                         
                      </div>
                   </div>
                </li>
                <li class="menu-item menu-dropdown">
                   <span class="menu-link">المعرض<i class="bx bx-chevron-right"></i></span>
                   <div class="submenu megamenu megamenu-column-4">
                      <div class="submenu-inner"> 
                         <a href="#" class="submenu-link">
                           <img src="{{ asset('images/csm_BW_213_D-5_S_07a661affb.png') }}" alt="yy">
                            <span class="submenu-title">Product Name</span>
                         </a>
                      </div>
                      <div class="submenu-inner">
                         <a href="#" class="submenu-link">
                           <img src="{{ asset('images/csm_BW_174_AP-5_S_d6c5327211 (1).png') }}" alt="yy">
                            <span class="submenu-title">Product Name</span>
                         </a>
                      </div>
                      <div class="submenu-inner">
                         <a href="#" class="submenu-link">
                           <img src="{{ asset('images/csm_BW_213_D-5_S_07a661affb.png') }}" alt="yy">
                            <span class="submenu-title">Product Name</span>
                         </a>
                      </div>
                      <div class="submenu-inner">
                         <a href="#" class="submenu-link">
                           <img src="{{ asset('images/csm_BW_213_D-5_S_07a661affb.png') }}" alt="yy">
                            <span class="submenu-title">Product Name</span>
                         </a>
                      </div>
                   </div>
                </li>
                <li class="menu-item menu-dropdown">
                   <span class="menu-link">الوظائف <i class="bx bx-chevron-right"></i></span>
                 <!---  <div class="submenu megamenu megamenu-column-1">
                      <ul class="submenu-list">
                         <li class="submenu-item"><a href="#" class="submenu-link">1
             <a href="#" class="submenu-link">
                            <img src="https://i.ibb.co/zPJm9jy/Product-5.jpg" class="submenu-image_bronds" alt="Product">
                            <span class="submenu-title">2</span>
                         </a>
             </a></li>
                         <li class="submenu-item"><a href="#" class="submenu-link">3
             <a href="#" class="submenu-link">
                            <img src="https://i.ibb.co/zPJm9jy/Product-5.jpg" class="submenu-image_bronds" alt="Product">
                            <span class="submenu-title">3 </span>
                         </a></a></li>
                         <li class="submenu-item"><a href="#" class="submenu-link">4
             <a href="#" class="submenu-link">
                            <img src="https://i.ibb.co/zPJm9jy/Product-5.jpg" class="submenu-image_bronds" alt="Product">
                            <span class="submenu-title">5</span>
                         </a></a></li>
                         <li class="submenu-item"><a href="#" class="submenu-link">6
             <a href="#" class="submenu-link">
                            <img src="https://i.ibb.co/zPJm9jy/Product-5.jpg" class="submenu-image_bronds" alt="Product">
                            <span class="submenu-title">7</span>
                         </a></a></li>
                      </ul>
                   </div>--->
                </li>
                <li class="menu-item"><a href="index.html#contact" class="menu-link">تواصل معنا </a></li>
             </ul>
          </div>
          <div class="boxdiv" class="menu-item">
            <form action="/action_page.php" >
              <input type="text" placeholder="البحث عن" name="p">
              <span class="icon"> <i class="fa fa-search"></i></span>
              
            </form>
          </div>
          <div class="boxdiv" class="menu-item">
           
            <input type="text" placeholder="العربية" name="lan">
            <span class="icon"><i class="fas fa-globe" class="icon"></i></span>
          </div>
       </section>
  </div>
  <div >
    <div class="card-image"> <img class="left  direction: ltr" src="{{ asset('images/Layer_1.png') }}" alt="yy"></div>
  </div>
  <div  class="Zano" >
 
               <div > 
               
                        <div style="display: flex; justify-content: space-between; font-family: 'Cairo';">
                                 <div  class="left ;size:20%;"style="display: flex; justify-content: center; align-items: center;">
                                 <!-- Content of the left div -->
                                 <h1>           &nbsp;</h1>
                                 <img src="{{ asset('images/BLUE_T.svg') }}" alt="yy">
                                 </div>
                                 <div style="text-align: justify; " class=" right ; size:20%; direction: rtl;">
                                    <!-- Content of the right div -->
                                 <h1  style="direction: rtl;"> <span style='font-size:20 px;direction: rtl;'> &#9664; من نحن ـــ؟ </span></h1>  
                                          <p style="direction: rtl;">
                                             شركة بلو ترانجل للتجارة المحدودة عضو في مجموعة شركات عبد الله الرباعي التي تتخصص في عدة مجالات مختلفة
                                             مثل المقاولات والزراعة وأيضًا التجارة العامة تأسست الشركة في عام 2015 بشكل رسمي في الجمهورية اليمنية
                                             وتمكنت من بناء خبرة قوية وجيدة خلال السنوات منذ تأسيس شركة بلوتراتجل للتجارة المحدودة تخصصت الشركة في
                                             معدات البناء وآلات الحفر وأيضًا في مجال الطاقة، المعدات الزراعية معدات الرفع وأيضًا معدات واللات خاصة
                                             وقد أنشأت الشركة شبكة قوية جدًا وموثوق بها داخل وخارج اليمن مع العملاء والموردين قامت الشركة بتوسيع محفظة
                                             منتجاتها لتصبح موزعًا حصريًا لأكبر العلامات التجارية مثل شركة ديفلون الكورية (معدات دوسان الثقيلة سابقًا)
                                             ، شركة بوبكات التشيكية معدات البناء والحفر الخفيفة والمتوسطة) شركة بوماج الألمانية (معدات الأسفلت الثقيلة
                                             والخفيفة ، شركة فارم ترك من اسكرت كابوتا الهندية (حراثات زراعية خفيفة ومتوسطة شركة كوباز الكورية (معدات
                                             صيانة الطرقات وغيرها من العلامات التجارية الرائدة في المجال.
                                          </p>
                                 </div>
                        </div>
               
               </div>
 
   </div>
  <div class="Zano" >
   <div class="title-line">
      <div class="line center"></div>
      <h1 class="title right"> 
         &#9664; الوكــــالات
      </h1>
    </div>

   </div>
   <div class="Zano">
   <div  class="section" >
     <section   dir="rtl"style=" font-family: 'Cairo';flex-wrap: wrap; max-width: 80em; margin-inline: auto;transform: translatey(-3em);position: relative;">  
                     <div class="card-top">
                     <div class="card" >
                        <img src="{{ asset('images/HD-DEVELON.svg') }}" alt="yy">
                        <p>
                           شركة اتش دي هيونداي انفراكور (شركة دوسان سابقا) هي شركة عالمية رائدة في مجال هندسة وتصنيع وتسويق معدات البناء المدمجة والثقيلة تم تصميم معدات ديفلون القوية للمساعدة في التغلب على أكبر التحديات التي تواجهك من خلال تقديم مكونات المساعد وتقنيات حديثة
                        </p>
                          <br/> <br/> <br/>
                        <br/> <br/> <br/>
                        <button class="my-button">تعرف على المزيد</button>
                     </div>
                     <hr class="my-vertical-line">   
                     <div class="card" >
                        <img src="{{ asset('images/Bobcat_one_tough_animal_Black.svg') }}" alt="yy">
                        <p > 
                           تقود شركة بوبكات الصناعة في تصميم وتصنيع وتسويق وتوزيع المعدات المدمجة للبناء والتأجير والمناظر الطبيعية والزراعة وصيانة الأراضي والطرقات والمرافق والصناعة والتعدين نسعى جاهدين لتمكين عملائنا من القيام وظائفهم بشكل أكثر كفاءة وفعالية

                        </p>
                        <br/> <br/> <br/>
                        <br/> <br/> <br/>
                        <button class="my-button">تعرف على المزيد</button>
                     </div>
                     <hr class="my-vertical-line">
                     <div class="card">
                        <img src="{{ asset('images/Babcat_Mach_hand.svg') }}" alt="yy">
                        <p>والأكثر صعوبة بفضل التصميم الفائق وأحدث التقنيات
                           تطلب العمل الشاق أكثر المعدات موثوقية. توفر دوسان للطاقة المحمولة المعدات المتينة والمثبتة التي تحتاجها للتعامل بثقة مع المهام الأكبر والأكثر صعوبة بفضل التصميم الفائق وأحدث التقنيات

                        </p>
                        <br/> <br/> <br/>
                        <br/> <br/> <br/>
                        <button class="my-button">تعرف على المزيد</button>
                     </div>

                    
                     </div>
                     <br/> <br/> <br/>
                     
                     <div class="card-top">
                        <div class="card" >
                           <img src="{{ asset('images/HD-DEVELON.svg') }}" alt="yy">
                           <p>
                              شركة اتش دي هيونداي انفراكور (شركة دوسان سابقا) هي شركة عالمية رائدة في مجال هندسة وتصنيع وتسويق معدات البناء المدمجة والثقيلة تم تصميم معدات ديفلون القوية للمساعدة في التغلب على أكبر التحديات التي تواجهك من خلال تقديم مكونات المساعد وتقنيات حديثة
                           </p>
                             <br/> <br/> <br/>
                           <br/> <br/> <br/>
                           <button class="my-button">تعرف على المزيد</button>
                        </div>
                        <hr class="my-vertical-line">   
                        <div class="card" >
                           <img src="{{ asset('images/Bobcat_one_tough_animal_Black.svg') }}" alt="yy">
                           <p > 
                              تقود شركة بوبكات الصناعة في تصميم وتصنيع وتسويق وتوزيع المعدات المدمجة للبناء والتأجير والمناظر الطبيعية والزراعة وصيانة الأراضي والطرقات والمرافق والصناعة والتعدين نسعى جاهدين لتمكين عملائنا من القيام وظائفهم بشكل أكثر كفاءة وفعالية
   
                           </p>
                           <br/> <br/> <br/>
                           <br/> <br/> <br/>
                           <button class="my-button">تعرف على المزيد</button>
                        </div>
                        <hr class="my-vertical-line">
                        <div class="card">
                           <img src="{{ asset('images/Babcat_Mach_hand.svg') }}" alt="yy">
                           <p>والأكثر صعوبة بفضل التصميم الفائق وأحدث التقنيات
                              تطلب العمل الشاق أكثر المعدات موثوقية. توفر دوسان للطاقة المحمولة المعدات المتينة والمثبتة التي تحتاجها للتعامل بثقة مع المهام الأكبر والأكثر صعوبة بفضل التصميم الفائق وأحدث التقنيات
   
                           </p>
                           <br/> <br/> <br/>
                           <br/> <br/> <br/>
                           <button class="my-button">تعرف على المزيد</button>
                        </div>
                        </div>
                     
                     </div>

                  </section>
    </div>    
   </div>  
            
</div>
  <div class="gradient-bg">
    <svg xmlns="http://www.w3.org/2000/svg">
      <defs>
        <filter id="goo">
          <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
          <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -8" result="goo" />
          <feBlend in="SourceGraphic" in2="goo" />
        </filter>
      </defs>
    </svg>
    <div class="gradients-container">
     <div class="g1"></div>
      <div class="g2"></div>
      <div class="g3"></div>
      <div class="g4"></div> 
      <div class="g3"></div>
     
    </div>
  </div>
 


     <link rel="javescrupt" href="{{ asset('js/wow.min.js') }}">
     <script src="assets/vendor/php-email-form/validate.js"></script>
  </body>
</html>
