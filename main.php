

<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias debitis deserunt facilis ipsam necessitatibus consectetur labore animi atque aut beatae ratione officiis, reiciendis consequuntur iusto dignissimos nihil molestiae a maiores!";

    $to = "azadavid@yahoo.com";
    $from = "Reply to: " . $email;
    $subject = "test mail in php";
    $body = "You have received a new message from your website contact form.\n\n" .
        "Here are the details:\n\nName: $name\n\nEmail: $email\n\Lastname: $subject\n\nMessage:\n$message";
    if (mail($to, $subject, $body, $from)) {
        echo"mail sent";
    } else {
        echo "mail not sent";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Project</title>
    <link rel="stylesheet" href="./fontawesome/css/solid.css" />
	<link rel="stylesheet" href="./fontawesome/css/brands.css" />
	<script src="./fontawesome/js/brands.js"></script>
	<script src="./fontawesome/js/solid.js"></script>
	<script src="./fontawesome/js/all.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="main.css">
     <link rel="icon" type="image/x-icon" href="./images/favicon-16x16.png">

    <script defer src="./js/index.js"></script>

  
</head>
<body>
<div class="scroll_top">
    <i class="fa-solid fa-arrow-up"></i>
</div>
   
     <header class="container header">
        <nav class="nav">
            <h2>Arsha</h2>
            <ul>
                <li><a class="links active-link" href="#">Home</a></li>
                <li><a class="links link-item" href="#">About</a></li>
                <li><a class="links link-item" href="#">Service</a></li>
                <li><a class="links link-item" href="#">Portfolio</a></li>
                <li><a class="links link-item" href="#">Team</a></li>
                
                <li class="drop-down"><a class="links" href="#">Drop Down</a>
                <i class="fa-solid fa-chevron-down"></i>

                <div class="sub-menu-1">
                    <ul >
                        <li><a href="#" class="links">Drop Down 1</a></li>
                        <li class="deep-drop-down" class="links"><a href="#">Deep Drop Down</a>
                                 <i class="fa-solid fa-chevron-right"></i>

                    <div class="sub-menu-2">
                         <ul >
                        <li><a href="#" class="links">Deep Drop Down 1</a></li>
                        <li class="deep-drop-down" class="links"><a href="#">Deep Drop Down</a>
                        </li>
                        <li><a href="#" class="links">Deep Drop Down 2</a></li>
                        <li><a href="#" class="links">Deep Drop Down 3</a></li>
                        <li><a href="#" class="links">Deep Drop Down 5</a></li>
                      </ul>
                </div>
                        
                        </li>
                        <li><a href="#" class="links">Drop Down 2</a></li>
                        <li><a href="#" class="links">Drop Down 3</a></li>
                        <li><a href="#" class="links">Drop Down 5</a></li>
                    </ul>
                </div>
                
            </li>

                <li><a class="links link-item" href="">Contact</a></li>
                <li><a class="btn_primary links" href="">Get Started</a></li>
            </ul>
        </nav>
        <section class="cover_page">
              <div class="cover_page_left">
                        <div class="headline">
                            <h2>Better Solutions For Your Business</h2>
                             <p>We are team of talented designers making websites with Bootstrap</p>
                        </div>
                         <div class="video">
                            <a href="#" class="link btn_primary">Get Started</a>
                            <div class="video_icon">
                                <div><i class="fa-solid  fa-play"></i></div>
                                <a href="#" class="link"> Watch Video</a>
                            </div>
                         </div>
              </div>
              <div class="cover_page_right">
                <img src="./images/cover_img.png" class="anim" alt="">
              </div>
        </section>
        <section class="brand">
               <div>
                 <img src="./images/client-1.png" class="brands" alt="client-1">
                <img src="./images/client-2.png" class="brands" alt="client-2">
                <img src="./images/client-3.png" class="brands" alt="client-3">
                <img src="./images/client-4.png" class="brands" alt="client-4">
                <img src="./images/client-5.png" class="brands" alt="client-5">
                <img src="./images/client-6.png" class="brands" alt="client-6">
               </div>
        </section>
    </header> 

    <main class="container">
        <section class="about_us">
               <div class="title">
                    <h2 class="heading">About Us</h2>
                    <div class="line">
                        <div class="line_light"></div>
                        <div class="line_bold"></div>
                    </div>
                </div>

                <div class="text_wrapper">
                 <div class="text_left">
                        <div class="text_left_top">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing 
                                elit, sed do eiusmod tempor incididunt ut labore 
                                et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="text_left_down">
                            <div class="icon_text_down">
                                <i class="fa-sharp fa-solid fa-chevron-down right"></i>
                                <i class="fa-sharp fa-solid fa-chevron-down right top"></i>
                                <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                            </div>
                            <div class="icon_text_down">
                                <i class="fa-sharp fa-solid fa-chevron-down right"></i>
                                <i class="fa-sharp fa-solid fa-chevron-down right top"></i>
                                <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                            </div>
                            <div class="icon_text_down">
                                <i class="fa-sharp fa-solid fa-chevron-down right "></i>
                                <i class="fa-sharp fa-solid fa-chevron-down right top"></i>
                                <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                            </div>
                        </div>
                 </div>

                <div class="text_right">
                        <div class="text_right_top">
                              <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat
                                Duis aute irure dolor in reprehenderit in voluptate velit
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                        </div>
                        <div class="text_right_down">
                             <a href="#" id="test" class="link btn_secondary learn_more">Learn More</a>
                        </div>
                </div>
                </div>
            

        </section>

        <section class="work">
            <div class="why_us about_us_down">

            <div class="container_lower_left">
             <h2>Eum ipsam laborum deleniti velit pariatur architecto aut nihil</h2>
             <p class="lower_left_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                 incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit</p>
                 

            <div class="accordion_container">
           <div class="accordion">
                        
                 <input type="radio" class="accordion_input" name="why_us" id="why_us_1">
                 <div class="accordion_icon_right why_us_icon">
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    <div class="accordion_head">

                        <div class="accordion_icon_left">
                           <span>01</span>
                            <label class="accordion_label" for="why_us_1">Non consectetur a erat nam at lectus urna duis?</label>
                        </div>

                       

                    </div>

                    <div class="accordion_content accordion_why_us">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil praesentium,
                                 enim doloremque ullam possimus vero temporibus! Culpa 
                                laborum atque doloremque quidem. Libero odio incidunt odit,
                             ipsum magni voluptate similique illo?
                            </p>
                    </div>

                </div>


                <div class="accordion">
                        
                 <input type="radio" class="accordion_input" name="why_us" id="why_us_2">
                 <div class="accordion_icon_right why_us_icon">
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    <div class="accordion_head">

                        <div class="accordion_icon_left">
                           <span>02</span>
                            <label class="accordion_label" for="why_us_2"> Placeat facilis! Impedit, voluptatum aliquam</label>
                        </div>

                       

                    </div>

                    <div class="accordion_content accordion_why_us">
                            <p>
                                 placeat facilis! Impedit, voluptatum aliquam ducimus dolorem sequi soluta 
                                 earum consequuntur expedita dolor aliquid, magni quidem ab cumque commodi veritatis!
                            </p>
                    </div>

                </div>
            </div>



            <div class="accordion">
                        
                 <input type="radio" class="accordion_input" name="why_us" id="why_us_3">
                 <div class="accordion_icon_right why_us_icon">
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    <div class="accordion_head">

                        <div class="accordion_icon_left">
                           <span>03</span>
                            <label class="accordion_label" for="why_us_3">Dolor sit amet consectetur adipisicing elit</label>
                        </div>

                       

                    </div>

                    <div class="accordion_content accordion_why_us">
                            <p>
                             Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil praesentium,
                                 enim doloremque ullam possimus vero temporibus! Culpa 
                                laborum atque doloremque quidem. Libero odio incidunt odit,
                             ipsum magni voluptate similique illo?
                            </p>
                    </div>

                </div>

            

               



           </div>
                    <div class="why_us_img">
                        <img src="./images/why-us.png" alt="">
                    </div>
            </div>
            <div class="progress_bar">
                    <div class="progress_img">
                <img src="./images/skills.png" alt="skills" >
            </div>

            <div class="progress_wrapper">
                <div class="progress_text">
                    <h2 class="heading">Voluptatem dignissimos provident quasi corporis voluptates</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="progress_items">
                   <div class="progress_header">
                    <h3>HTML</h3>
                   <h3>100%</h3>
                  </div>

                    <div class="progress_item"></div>
                   
                </div>

                <div class="progress_items">
                   <div class="progress_header">
                    <h3>CSS</h3>
                   <h3>90%</h3>
                  </div>
                  <div class="css">
                    <div class="progress_item "></div>
                    <div class="progress_item_inner"></div>
                  </div>
                   
                </div>

                <div class="progress_items">
                   <div class="progress_header">
                    <h3>JAVASCRIPT</h3>
                   <h3>75%</h3>
                  </div>
                  <div class="js">
                    <div class="progress_item "></div>
                    <div class="progress_item_inner"></div>
                  </div>
                   
                </div>

                <div class="progress_items">
                   <div class="progress_header">
                    <h3>PHOTOSHOP</h3>
                   <h3>55%</h3>
                  </div>
                  <div class="photoshop">
                    <div class="progress_item "></div>
                    <div class="progress_item_inner"></div>
                  </div>
                   
                </div>
            </div>
            </div>
        </section>
        <section class="service">
                <div class="title">
                    <h2 class="heading">Service</h2>
                    <div class="line">
                        <div class="line_light"></div>
                        <div class="line_bold"></div>
                    </div>
                </div>

                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur
                     adipisicing elit. Voluptatem et quidem omnis eum animi,
                      id voluptatibus corrupti officiis ex velit optio error
                       quaerat est in delectus, autem laudantium minima nulla 
                       corporis possimus. Enim, 
                    tempora sunt consequatur autem harum consequuntur sequi!</p>
                </div>

                <div class="plan service_card">
                    <div class="card_plan service_card">
                        <i class="fa-solid fa-globe service_icon"></i>
                        <h4>Lorem Ipsum </h4>
                        <p>Lorem ipsum dolor sit amet.
                            Lorem ipsum dolor sit amet.
                            Lorem ipsum dolor sit amet.
                        </p>
                    </div>

                    <div class="card_plan service_card">
                        <i class="fa fa-file service_icon" aria-hidden="true"></i>
                        <h4>Sed ut perspici </h4>
                        <p>Lorem ipsum dolor sit amet.
                            Lorem ipsum dolor sit amet.
                            Lorem ipsum dolor sit amet.
                        </p>
                    </div>
                    <div class="card_plan service_card">
                       <i class="fa fa-tachometer service_icon" aria-hidden="true"></i>
                        <h4>Magni Dolores</h4>
                        <p>Lorem ipsum dolor sit amet.
                            Lorem ipsum dolor sit amet.
                            Lorem ipsum dolor sit amet.
                        </p>
                    </div>
                    <div class="card_plan service_card">
                        <i class="fa-solid fa-layer-group service_icon"></i>
                        <h4>Nemo Enim </h4>
                        <p>Lorem ipsum dolor sit amet.
                            Lorem ipsum dolor sit amet.
                            Lorem ipsum dolor sit amet.
                        </p>
                    </div>

                </div>
                </div>


        </section>
        
      <section class="action">
        <div class="overlay">
            <div class="action-text">
                <h2 7>Call To Action</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo aliquam ipsa
                     dolorum reprehenderit, officia ea sit eligendi ve
                    l doloribus fugiat, soluta neque odit inventore quis
                     quas accusamus, nisi nulla. Architecto!
                    </p>
            </div>
            <div class="action-btn">
                <a href="#" class="btn_primary ">Call To Action</a>
            </div>
        </div>
      </section>

        <section class="portfolio">
                <div class="title">
                    <h2 class="heading">Portfolio</h2>
                    <div class="line">
                        <div class="line_light"></div>
                        <div class="line_bold"></div>
                    </div>
                </div>

                <div class="tab">
                    <h3 class="all all_hover">All</h3>
                    <h3 class="all_hover">App</h3>
                    <h3 class="all_hover">Card</h3>
                    <h3 class="all_hover">Web</h3>
                </div>

                <div class="portfolio_imgs">
                    <div class="images">
                        <img src="./images/portfolio-1.jpg" alt="">
                        <div class="images_details">
                            <div class="image_name">
                                <h3>Web 1</h3>
                                <h3>Web </h3>
                            </div>
                            <div class="image_icon">
                                <i class="fa-solid fa-plus"></i>
                                 <i class="fa-solid fa-chain"></i>
                            </div>
                        </div>
                    </div>

                    <div class="images">
                        <img src="./images/portfolio-2.jpg" alt="">
                        <div class="images_details two">
                            <div class="image_name">
                                <h3>Web 2</h3>
                                <h3>Web </h3>
                            </div>
                            <div class="image_icon">
                                <i class="fa-solid fa-plus"></i>
                                 <i class="fa-solid fa-chain"></i>
                            </div>
                        </div>
                    </div>
                    <div class="images">
                        <img src="./images/portfolio-4.jpg" alt="">
                        <div class="images_details three">
                            <div class="image_name">
                                <h3>Web 3</h3>
                                <h3>Web </h3>
                            </div>
                            <div class="image_icon">
                                <i class="fa-solid fa-plus"></i>
                                 <i class="fa-solid fa-chain"></i>
                            </div>
                        </div>
                    </div>
                    <div class="images">
                        <img src="./images/portfolio-6.jpg" alt="">
                        <div class="images_details">
                            <div class="image_name">
                                <h3>Web 4</h3>
                                <h3>Web </h3>
                            </div>
                            <div class="image_icon">
                                <i class="fa-solid fa-plus"></i>
                                 <i class="fa-solid fa-chain"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="images">
                        <img src="./images/portfolio-5 (1).jpg" alt="">
                        <div class="images_details">
                            <div class="image_name">
                                <h3>Web 5</h3>
                                <h3>Web </h3>
                            </div>
                            <div class="image_icon">
                                <i class="fa-solid fa-plus"></i>
                                 <i class="fa-solid fa-chain"></i>
                            </div>
                        </div>
                    </div>
                    <div class="images">
                        <img src="./images/portfolio-7.jpg" alt="">
                        <div class="images_details six">
                            <div class="image_name">
                                <h3>Web 6</h3>
                                <h3>Web </h3>
                            </div>
                            <div class="image_icon">
                                <i class="fa-solid fa-plus"></i>
                                 <i class="fa-solid fa-chain"></i>
                            </div>
                        </div>
                    </div>
                    <div class="images">
                        <img src="./images/portfolio-6.jpg" alt="">
                        <div class="images_details">
                            <div class="image_name">
                                <h3>Web 7</h3>
                                <h3>Web </h3>
                            </div>
                            <div class="image_icon">
                                <i class="fa-solid fa-plus"></i>
                                 <i class="fa-solid fa-chain"></i>
                            </div>
                        </div>
                    </div>
                    <div class="images">
                        <img src="./images/portfolio-8.jpg" alt="">
                        <div class="images_details eight">
                            <div class="image_name">
                                <h3>Web 8</h3>
                                <h3>Web </h3>
                            </div>
                            <div class="image_icon">
                                <i class="fa-solid fa-plus"></i>
                                 <i class="fa-solid fa-chain"></i>
                            </div>
                        </div>
                    </div>
                    <div class="images">
                        <img src="./images/portfolio-9.jpg" alt="">
                        <div class="images_details nine">
                            <div class="image_name">
                                <h3>Web 9</h3>
                                <h3>Web </h3>
                            </div>
                            <div class="image_icon">
                                <i class="fa-solid fa-plus"></i>
                                 <i class="fa-solid fa-chain"></i>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="team">
                <div class="title">
                    <h2 class="heading">Team</h2>
                    <div class="line">
                        <div class="line_light"></div>
                        <div class="line_bold"></div>
                    </div>
                </div>

                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur
                     adipisicing elit. Voluptatem et quidem omnis eum animi,
                      id voluptatibus corrupti officiis ex velit optio error
                       quaerat est in delectus, autem laudantium minima nulla 
                       corporis possimus. Enim, 
                    tempora sunt consequatur autem harum consequuntur sequi!</p>
                </div>

                <div class="profile_wrapper">
                    <div class="team_profile">
                        <div class="profile_picture">
                            <img src="./images/team-1.jpg" alt="">
                        </div>
                        
                        <div class="profile_details">
                            <div class="profile_name ">
                                <h2 class="heading">Walter White</h2>
                                <p>Chief Excutive Officer</p>
                                <div class="line" >
                                <div class="line_light"></div>
                            </div>
                            </div>
                            <div class="profile_desc">
                                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing 
                                </h3> 
                                <div class="social_acct ">
                                        <i class="fa-brands fa-twitter tag"></i>
                                        <i class="fa-brands fa-facebook tag"></i>
                                        <i class="fa-brands fa-instagram tag"></i>
                                        <i class="fa-brands fa-linkedin tag"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="team_profile">
                              <div class="profile_picture">
                            <img src="./images/team-2.jpg" alt="">
                        </div>
                        
                        <div class="profile_details">
                            <div class="profile_name ">
                                <h2 class="heading">Sarah Jhonson</h2>
                                <p>Product Manager</p>
                                <div class="line" >
                                <div class="line_light"></div>
                            </div>
                            </div>
                            <div class="profile_desc">
                                <h3>Temporibus ratione sunt eius suscipit facilis voluptate!
                                </h3> 
                                <div class="social_acct ">
                                        <i class="fa-brands fa-twitter tag"></i>
                                        <i class="fa-brands fa-facebook tag"></i>
                                        <i class="fa-brands fa-instagram tag"></i>
                                        <i class="fa-brands fa-linkedin tag"></i>
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="team_profile">
                              <div class="profile_picture">
                            <img src="./images/team-3.jpg" alt="">
                        </div>
                        
                        <div class="profile_details">
                            <div class="profile_name ">
                                <h2 class="heading">William Anderson</h2>
                                <p>CTO</p>
                                <div class="line" >
                                <div class="line_light"></div>
                            </div>
                            </div>
                            <div class="profile_desc">
                                <h3>Dignissimos labore repellat doloribus autem odio. 
                                </h3> 
                                <div class="social_acct ">
                                        <i class="fa-brands fa-twitter tag"></i>
                                        <i class="fa-brands fa-facebook tag"></i>
                                        <i class="fa-brands fa-instagram tag"></i>
                                        <i class="fa-brands fa-linkedin tag"></i>
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="team_profile">
                              <div class="profile_picture">
                            <img src="./images/team-4.jpg" alt="">
                        </div>
                        
                        <div class="profile_details">
                            <div class="profile_name ">
                                <h2 class="heading">Amanda Jepson</h2>
                                <p>Accountant</p>
                                <div class="line" >
                                <div class="line_light"></div>
                            </div>
                            </div>
                            <div class="profile_desc">
                                <h3>Tenetur suscipit sint quia quo, odit asperiores? 
                                </h3> 
                                <div class="social_acct ">
                                        <i class="fa-brands fa-twitter tag"></i>
                                        <i class="fa-brands fa-facebook tag"></i>
                                        <i class="fa-brands fa-instagram tag"></i>
                                        <i class="fa-brands fa-linkedin tag"></i>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
        </section>
        <section class="pricing">
                <div class="title">
                    <h2 class="heading">Pricing</h2>
                    <div class="line">
                        <div class="line_light"></div>
                        <div class="line_bold"></div>
                    </div>
                </div>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur
                     adipisicing elit. Voluptatem et quidem omnis eum animi,
                      id voluptatibus corrupti officiis ex velit optio error
                       quaerat est in delectus, autem laudantium minima nulla 
                       corporis possimus. Enim, 
                    tempora sunt consequatur autem harum consequuntur sequi!</p>
                </div>

                <div class="plan">
                    <div class="card_plan">
                        <div class="plan_top">
                            <h2>Free Plan</h2>
                            <p><sup>$</sup> 0</p>
                            <p class="per_month">per month</p>
                        </div>

                        <div class="plan_description">
                              <div>
                                <i class="fa-sharp fa-solid fa-chevron-down right "></i>
                                <p>Lorem ipsum, dolor sit amet</p>
                              </div>
                              <div>
                                <i class="fa-sharp fa-solid fa-chevron-down right "></i>
                                <p>Adipisicing elit. Reprehen.</p>
                              </div>
                              <div>
                                <i class="fa-sharp fa-solid fa-times times right " ></i>
                                <p class="times-text">Voluptatum harum quisquam.</p>
                              </div>
                              <div>
                                <i class="fa-sharp fa-solid fa-times times  right "></i>
                                <p class="times-text">Inventore ipsa quas eum. </p>
                              </div>
                        </div>

                        <div><button class="btn_primary">Get Started</button></div>

                    </div>

                    <div class="card_plan business">
                        <div class="plan_top">
                            <h2>Business Plan</h2>
                            <p> <sup>$</sup> 29</p>
                            <p class="per_month">per month</p>
                        </div>

                        <div class="plan_description">
                              <div>
                                <i class="fa-sharp fa-solid fa-chevron-down right "></i>
                                <p>Lorem ipsum, dolor sit amet </p>
                              </div>

                              <div>
                                <i class="fa-sharp fa-solid fa-chevron-down right "></i>
                                <p>Adipisicing elit. Reprehen. </p>
                              </div>
                              <div>
                                <i class="fa-sharp fa-solid fa-chevron-down right "></i>
                                <p>Voluptatum harum quisquam. </p>
                              </div>
                              <div>
                                <i class="fa-sharp fa-solid fa-chevron-down right "></i>
                                <p>Inventore ipsa quas eum . </p>
                              </div>
                        </div>
                        <div><button class="btn_primary">Get Started</button></div>

                    </div>

                    <div class="card_plan">
                        <div class="plan_top">
                            <h2>Developer Plan</h2>
                            <p><sup>$</sup> 49</p>
                            <p class="per_month">per month</p>
                        </div>

                        <div class="plan_description">
                              <div>
                                <i class="fa-sharp fa-solid fa-chevron-down right "></i>
                                <p>Lorem ipsum, dolor sit amet</p>
                              </div>
                              <div>
                                <i class="fa-sharp fa-solid fa-chevron-down right "></i>
                                <p>Adipisicing elit. Reprehen.</p>
                              </div>
                              <div>
                                <i class="fa-sharp fa-solid fa-chevron-down right "></i>
                                <p>Voluptatum harum quisquam.</p>
                              </div>
                              <div>
                                <i class="fa-sharp fa-solid fa-chevron-down right "></i>
                                <p>Inventore ipsa quas eum . </p>
                              </div>
                        </div>

                        <div><button class="btn_primary">Get Started</button></div>

                    </div>
                </div>


        </section>
        <section class="faq">
               <div class="title">
                    <h2 class="heading">FREQUENTLY ASKED QUESTIONS</h2>
                    <div class="line">
                        <div class="line_light"></div>
                        <div class="line_bold"></div>
                    </div>
                </div>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur
                     adipisicing elit. Voluptatem et quidem omnis eum animi,
                      id voluptatibus corrupti officiis ex velit optio error
                       quaerat est in delectus, autem laudantium minima nulla 
                       corporis possimus. Enim, 
                    tempora sunt consequatur autem harum consequuntur sequi!</p>
                </div>

           <div class="accordion_container">

           
                <div class="accordion">
                        
                 <input type="radio" class="accordion_input" name="faq" id="faq1">
                 <div class="accordion_icon_right">
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    <div class="accordion_head">

                        <div class="accordion_icon_left">
                            <i class="fa-solid fa-circle-question"></i>
                            <label class="accordion_label" for="faq1">Lorem ipsum dolor sit amet consectetur.</label>
                        </div>

                       

                    </div>

                    <div class="accordion_content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil praesentium,
                                 enim doloremque ullam possimus vero temporibus! Culpa 
                                laborum atque doloremque quidem. Libero odio incidunt odit,
                             ipsum magni voluptate similique illo
                            </p>
                    </div>

                </div>


                 <div class="accordion">
                        
                 <input type="radio" class="accordion_input" name="faq" id="faq2">
                 <div class="accordion_icon_right">
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    <div class="accordion_head">

                        <div class="accordion_icon_left">
                            <i class="fa-solid fa-circle-question"></i>
                            <label class="accordion_label" for="faq2">Enim doloremque ullam possimus vero temporibus! Culpa.</label>
                        </div>

                       

                    </div>

                    <div class="accordion_content">
                            <p>
                             Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil praesentium,
                                 enim doloremque ullam possimus vero temporibus! Culpa 
                                laborum atque doloremque quidem. Libero odio incidunt odit,
                             ipsum magni voluptate similique illo?
                            </p>
                    </div>

                </div>


                 <div class="accordion">
                        
                 <input type="radio" class="accordion_input" name="faq" id="faq3">
                 <div class="accordion_icon_right">
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    <div class="accordion_head">

                        <div class="accordion_icon_left">
                            <i class="fa-solid fa-circle-question"></i>
                            <label class="accordion_label" for="faq3"> Dolor sit amet consectetur adipisicing elit.</label>
                        </div>

                       

                    </div>

                    <div class="accordion_content">
                            <p>
                              Dolor sit amet consectetur adipisicing elit. Nihil praesentium,
                                 enim doloremque ullam possimus vero temporibus! Culpa 
                                laborum atque doloremque quidem. Libero odio incidunt odit,
                             ipsum magni voluptate similique illo?
                            </p>
                    </div>

                </div>

                
                 <div class="accordion">
                        
                 <input type="radio" class="accordion_input" name="faq" id="faq4">
                 <div class="accordion_icon_right">
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    <div class="accordion_head">

                        <div class="accordion_icon_left">
                            <i class="fa-solid fa-circle-question"></i>
                            <label class="accordion_label" for="faq4">Libero odio incidunt odit,ipsum magni.</label>
                        </div>

                       

                    </div>

                    <div class="accordion_content">
                            <p> Libero odio incidunt odit,
                             ipsum magni voluptate similique illo?
                             Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil praesentium,
                                 enim doloremque ullam possimus vero temporibus! Culpa 
                                laborum atque doloremque quidem. Libero odio incidunt odit.
                            </p>
                    </div>

                </div>

            
           </div>

        </section>
        <section class="contact">
               <div class="title">
                    <h2 class="heading">Contact</h2>
                    <div class="line">
                        <div class="line_light"></div>
                        <div class="line_bold"></div>
                    </div>
                </div>
                 <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur
                     adipisicing elit. Voluptatem et quidem omnis eum animi,
                      id voluptatibus corrupti officiis ex velit optio error
                       quaerat est in delectus, autem laudantium minima nulla 
                       corporis possimus. Enim, 
                    tempora sunt consequatur autem harum consequuntur sequi!</p>
                </div>
                    <section>
                        
                            <div class="contact-left business">
                                <div>
                                    <div class="location">
                                    <div class="contact-icons" >
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </div>

                                    <div  >
                                        <h2 class="heading">Location:</h2>
                                        <p>A108 Adam Street
                                            New York, NY 535022
                                            United States
                                        </p>
                                    </div>
                                </div>

                                <div class="email">
                                    <div class="contact-icons"><i class="fa-solid fa-envelope "></i></div>

                                    <div >
                                        <h2 class="heading">Email:</h2>
                                        <p>info@example.com
                                        </p>
                                    </div>
                                </div>

                                <div class="phone-number">
                                    <div class="contact-icons"><i class="fa-solid fa-mobile "></i></div>
                                    <div  >
                                        <h2 class="heading">Call:</h2>
                                        <p>+ 155895548855
                                        </p>
                                    </div>
                                </div>
                                </div>

                                <div class="map">
                                    <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.409703555252!2d3.624659514770428!3d6.
                                    469672995319668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf979fee11457%3A0xa5d6185fb1770461!
                                    2sAptech%20Computer%20Education%20Ajah%20Centre!5e0!3m2!1sen!2sng!4v1674828712956!5m2!1sen!2sng"
                                    width="400"
                                    height="300"
                                    style="border: 0"
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"
					                ></iframe>
                                </div>

                            </div>
                            
                            <div class="contact-right business">
                                <form class="form-contact" method="POST" >
                                    <div class="top">
                                        <div>
                                            <h3>Your Name</h3>
                                            <input type="text" name="name">
                                        </div>

                                        <div>
                                            <h3>Your Email</h3>
                                            <input type="text" name="email">
                                        </div>
                                    </div>

                                    <div class="subject">
                                        <h3>Subject</h3>
                                        <input type="text" name="subject">
                                    </div>

                                    <div class="textarea">
                                        <h3>Message </h3>
                                        <textarea name="message"  cols="30" rows="10"></textarea>
                                    </div>
                                   <div class=" contact-submit"> <button  type="submit" name="submit" class="btn_secondary ">Submit</button>
                            
                                </div>
                                           
                                </form>
                            </div>
                    </section>
        </section>
        <section class="newsletter">
                <div class="title">
                    <h2 class="heading">Join Our NewsLetter</h2>
                    <div class="line">
                        <div class="line_light"></div>
                        <div class="line_bold"></div>
                    </div>
                </div>

                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur consequuntur sequi!</p>
                </div>

                <form action="" class="form">
                    <div class="subscribe">
                        <input type="text">
                        <button class="btn_primary">Subscribe</button>
                    </div>
                </form>

        </section>
    </main>
    <footer class="container">
        <section class="footer_links">
            <div class="address footer_item">
                <h2  class="heading">ARSHA</h2>
                <div class="address_top">
                    <p>A108 Adam Street
                        New York, NY 535022
                        United States
                    </p>
                </div>
                    <div class="address_down">
                        <p><span class="phone">Phone</span>: +1 5589 55488 55</p>
                        <p><span class="email">Email</span>:info@example.com</p> 
                    </div>
            </div>

            <div class="useful_links footer_item">
                <h2  class="heading">Useful Links</h2>
                <ul>
                    <li>
                         <i class="fa-solid fa-chevron-right"></i>
                         <a href="#" class="link">Home</a></li>
                    <li>
                         <i class="fa-solid fa-chevron-right"></i>
                         <a href="#" class="link">About us</a></li>
                    <li>
                         <i class="fa-solid fa-chevron-right"></i>
                        <a href="#" class="link">Services</a></li>
                    <li>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="#" class="link">Terms of services</a>
                    </li>
                    <li> 
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="#" class="link">Privacy policy</a>
                    </li>
                </ul>
            </div>
            <div class="our_service footer_item">
                <h2 class="heading">Our Service</h2>
                          <ul>
                    <li>
                         <i class="fa-solid fa-chevron-right"></i>
                         <a href="#" class="link">Web Design</a></li>
                    <li>
                         <i class="fa-solid fa-chevron-right"></i>
                         <a href="#" class="link">Web Development</a></li>
                    <li>
                         <i class="fa-solid fa-chevron-right"></i>
                        <a href="#" class="link">Product management</a></li>
                    <li>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="#" class="link">Marketing</a>
                    </li>
                    <li> 
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="#" class="link">Graphics Design</a>
                    </li>
                </ul>
            </div>
            <div class="social_networks footer_item">
                <h2  class="heading">Our Social Networks</h2>
                 <div>
                    <div>
                    Cras fermentum odio eu feugiat lide par
                     naso tierra 
                    videa magna derita valies
                </div>
                 <div class="footer_icon">
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-skype"></i>
                    <i class="fa-brands fa-linkedin"></i>
                    
                 </div>
                 </div>
            </div>
        </section>
        <section class="copyright">
             <div>
                <h2>&copy; Copyright Arsha. All Rights Reserved</h2>
            <h2>Designed by <span>BootstrapMade</span></h2>
             </div>
        </section>
    </footer>
    
</body>
</html>