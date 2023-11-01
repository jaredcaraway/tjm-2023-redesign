<?php

/**
 * The template for displaying the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package TJM_2023_Redesign
 */

get_header(); ?>

<main id="main" class="site-main" role="main">
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-4" src="<?php echo get_template_directory_uri() . '/assets/img/terry-jude-miller-portrait-no-bg.png' ?>" alt="Portrait of Texas poet Terry Jude Miller wearing a black shirt and gray suit jacket." />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">Terry Jude Miller</h1>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0 mt-4">
                Poet based in Richmond, Texas
            </p>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fa-solid fa-pen-nib"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>
        </div>
    </header>

    <!-- About Section-->
    <section class="page-section bg-primary text-white mb-0" id="about">
      <div class="container">
        <!-- About Section Heading-->
        <h2
          class="page-section-heading text-center text-uppercase text-white mb-4"
        >
          About Terry
        </h2>

        <!-- About Section Content-->
        <div class="row">
          <div class="col-10 col-md-12 mx-auto">
            <p class="lead two-columns">
              Terry Jude Miller is a Pushcart Prize nominated poet from Houston,
              Texas. The recipient of many poetry awards including the 2019
              Smallest Leaf Award, 2018 Catherine Case Lubbe Manuscript Prize,
              Maxwell Prize, and the Inez Grimes award, the Georgia Poetry
              Society 2018 Langston Hughes Award, a Juried Poet for the 2011 &
              2012 Houston Poetry Festivals and winner of the Global Peace Poem
              competition of the 2012 Tyler Peace Festival, his work has been
              published in scores of publications including the Southern Poetry
              Anthology, the Lily Poetry Review, The Comstock Review, the
              National Federation of State Poetry Societies' “Encore”, the Texas
              Poetry Calendar, Harbinger Asylum, Postcard Poems and Prose
              Magazine, Everyday Poets, the University of Houston's Bayou
              Review, Ancient Paths, Orbis, Stepping Stones Magazine, Furnace
              Review, Shine Journal, Blue Skies Poetry, Survivor's Review, Live
              Oak Review, Lamplighter Review, Bijou Poetry Review, Chaffey
              Review, Foundling Review, Houston Literary Review, Boston Literary
              Magazine, the Edison Literary Review, and the Birmingham Arts
              Journal. Miller's books of poetry are titled: “The Drawn Cat's
              Dream” (published by the Poetry Society of Texas), “The Day I
              Killed Superman”, “What If I Find Only Moonlight?”, and “The
              Butterfly Canonical” and can be purchased at barnesandnoble.com
              and amazon.com. He is a member of the Academy of American Poets
              and the Poetry Society of Texas. He is the creator of the Texas
              Poets Podcast. Miller is the 1st Vice Chancellor of the National
              Federation of State Poetry Societies.
            </p>
          </div>
        </div>
        <h3 class="page-section-heading text-center text-white mt-5 mb-4">
          AWARDS
        </h3>
        <div class="row gx-4">
          <!-- Omitting alt text on awards since these are purely decorative -->
          <figure class="figure col-6 col-sm-6 col-lg-3 mb-5">
            <img
              src="<?php echo get_template_directory_uri() . '/assets/img/awards/award-img1.jpg' ?>"
              class="figure-img img-fluid rounded mx-auto d-block"
              alt=""
            />
            <figcaption class="figure-caption text-center">
              Catherine Case Lubbe Manuscript Prize, Maxwell Prize, Inez Grimes
              Award (2018)
            </figcaption>
          </figure>
          <figure class="figure col-6 col-sm-6 col-lg-3 mb-5">
            <img
              src="<?php echo get_template_directory_uri() . '/assets/img/awards/award-img2.jpg' ?>"
              class="figure-img img-fluid rounded mx-auto d-block"
              alt=""
            />
            <figcaption class="figure-caption text-center">
              Georgia Poetry Society Langston Hughes Award (2018)
            </figcaption>
          </figure>
          <figure class="figure col-6 col-sm-6 col-lg-3 mb-5">
            <img
              src="<?php echo get_template_directory_uri() . '/assets/img/awards/award-img3.jpg' ?>"
              class="figure-img img-fluid rounded mx-auto d-block"
              alt=""
            />
            <figcaption class="figure-caption text-center">
              Smallest Leaf Award (2019)
            </figcaption>
          </figure>
          <figure class="figure col-6 col-sm-6 col-lg-3 mb-5">
            <img
              src="<?php echo get_template_directory_uri() . '/assets/img/awards/award-img4.jpg' ?>"
              class="figure-img img-fluid rounded mx-auto d-block"
              alt=""
            />
            <figcaption class="figure-caption text-center">
              Texas Poetry Calendar - "Wild Wine" (2019)
            </figcaption>
          </figure>
        </div>
      </div>
    </section>

    <!-- News Section-->
    <section class="page-section news" id="news">
      <div class="container-lg">
        <!-- News Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-4">
          News
        </h2>

        <!-- News Section Content -->
        <div class="row">
          <div class="col-10 offset-1">
            <div class="accordion" id="newsAccordion">
              <!-- Dynamically generated news items will be appended here -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Books Section-->
    <section class="page-section books text-white bg-primary" id="books">
      <div class="container">
        <!-- Books Section Heading-->
        <h2
          class="page-section-heading text-center text-uppercase text-secondary text-white mb-4"
        >
          Books
        </h2>

        <p class="lead text-center mb-5">
          Click each title to learn more and find a link to purchase your own
          copy.
        </p>
        <!-- Books Grid Items-->
        <!-- TODO: Add appropriate aria roles or anything else needed for accessibility -->
        <div class="row d-flex align-items-stretch">
          <!-- Books Item 1-->
          <div class="col-sm-6 col-lg-4 mb-5">
            <div
              class="books-item mx-auto book-trigger"
              tabindex="0"
              data-bs-toggle="modal"
              data-bs-target="#booksModal1"
            >
              <img
                class="img-fluid"
                src="<?php echo get_template_directory_uri() . '/assets/img/books/the-butterfly-canonical-cover.jpeg' ?>"
                alt="Cover of The Butterfly Canonical, a book of poetry by Terry Jude Miller."
              />
            </div>
          </div>
          <!-- Books Item 2-->
          <div class="col-sm-6 col-lg-4 mb-5">
            <div
              class="books-item mx-auto book-trigger"
              tabindex="0"
              data-bs-toggle="modal"
              data-bs-target="#booksModal2"
            >
              <img
                class="img-fluid"
                src="<?php echo get_template_directory_uri() . '/assets/img/books/what-if-i-find-only-moonlight-cover.jpeg' ?>"
                alt="Cover of What If I Find Only Moonlight, a book of poetry by Terry Jude Miller."
              />
            </div>
          </div>
          <!-- Books Item 3-->
          <div class="col-sm-6 col-lg-4 mb-5">
            <div
              class="books-item mx-auto book-trigger"
              tabindex="0"
              data-bs-toggle="modal"
              data-bs-target="#booksModal3"
            >
              <img
                class="img-fluid"
                src="<?php echo get_template_directory_uri() . '/assets/img/books/the-drawn-cats-dream-cover.jpg' ?>"
                alt="Cover of The Drawn Cat's Dream, a book of poetry by Terry Jude Miller. It also features the text 'Poetry Society of Texas' beneath the title, and at the bottom it reads, 'Catherine Case Lubbe Manuscript Prize 2018.'"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Anthologies Section-->
    <section
      class="page-section anthologies text-white bg-primary"
      id="anthologies"
    >
      <div class="container">
        <!-- Anthologies Section Heading-->
        <h2
          class="page-section-heading text-white text-center text-uppercase text-secondary mb-4"
        >
          Anthologies
        </h2>
        <p class="lead text-center mb-5">
          Click each title to learn more and find a link to purchase your own
          copy.
        </p>
        <!-- Anthologies Grid Items-->
        <div class="row d-flex align-items-stretch">
          <!-- Anthologies Item 1-->
          <div class="col-sm-6 col-lg-3 mb-5">
            <div
              class="anthology-item mx-auto book-trigger"
              data-bs-toggle="modal"
              data-bs-target="#anthologyModal1"
              tabindex="0"
            >
              <img
                class="img-fluid"
                src="<?php echo get_template_directory_uri() . '/assets/img/anthologies/the-ocotillo-review-summer-2018-cover-resized.webp' ?>"
                alt="Cover of the summer 2018 issue of The Ocotillo Review, a poetry journal."
              />
            </div>
          </div>
          <!-- Anthologies Item 2-->
          <div class="col-sm-6 col-lg-3 mb-5">
            <div
              class="anthology-item mx-auto book-trigger"
              data-bs-toggle="modal"
              data-bs-target="#anthologyModal2"
              tabindex="0"
            >
              <img
                class="img-fluid"
                src="<?php echo get_template_directory_uri() . '/assets/img/anthologies/ancient-paths-issue-17-cover-resized.jpg' ?>"
                alt="Cover of issue 17 of Ancient Paths, a poetry journal."
              />
            </div>
          </div>
          <!-- Anthologies Item 3-->
          <div class="col-sm-6 col-lg-3 mb-5">
            <div
              class="anthology-item mx-auto book-trigger"
              data-bs-toggle="modal"
              data-bs-target="#anthologyModal3"
              tabindex="0"
            >
              <img
                class="img-fluid"
                src="<?php echo get_template_directory_uri() . '/assets/img/anthologies/southern-poetry-anthology-volume-viii-texas-cover-resized.jpg' ?>"
                alt="Cover of The Southern Poetry Anthology volume VIII: Texas, a poetry journal."
              />
            </div>
          </div>

          <!-- Anthologies Item 4-->
          <div class="col-sm-6 col-lg-3 mb-5">
            <div
              class="anthology-item mx-auto book-trigger"
              data-bs-toggle="modal"
              data-bs-target="#anthologyModal4"
              tabindex="0"
            >
              <img
                class="img-fluid"
                src="<?php echo get_template_directory_uri() . '/assets/img/anthologies/2019-texas-poetry-calendar-cover-resized.webp' ?>"
                alt="Cover of the 2019 Texas Poetry Calendar."
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Photos Section-->
    <section class="page-section photos" id="photos">
      <div class="container">
        <!-- Photos Section Heading-->
        <h2
          class="page-section-heading text-center text-uppercase text-secondary mb-4"
        >
          Photos
        </h2>

        <!-- Photo Grid Items-->
        <div class="row d-flex">
          <!-- Photo 1 - Terry & Yusef -->
          <div class="col-md-6 col-lg-4 mb-5 text-center">
            <figure class="figure">
              <img
                src="<?php echo get_template_directory_uri() . '/assets/img/photos/TJM_YusefKonumyakaa_RS.png' ?>"
                alt="Terry Jude Miller & Yusef Komunyakaa smile and pose for a photo in business casual attire."
                class="img-fluid rounded"
              />
              <figcaption class="figure-caption">
                Terry Jude Miller & Yusef Komunyakaa
              </figcaption>
            </figure>
          </div>
          <!-- Photo 2 - Terry & Li-Young Lee-->
          <div class="col-md-6 col-lg-4 mb-5 text-center">
            <figure class="figure">
              <img
                src="<?php echo get_template_directory_uri() . '/assets/img/photos/TJM_LiYoungLee_RS.png' ?>"
                alt="Terry Jude Miller and Li-Young Lee smile and pose for a photo in business casual attire."
                class="img-fluid rounded"
              />

              <figcaption class="figure-caption">
                Terry Jude Miller & Li-Young Lee
              </figcaption>
            </figure>
          </div>
          <!-- Photo 3 - Terry at Friendswood -->
          <div class="col-md-6 col-lg-4 mb-5 text-center">
            <figure class="figure">
              <img
                src="<?php echo get_template_directory_uri() . '/assets/img/photos/TJM_FriendswoodLibrary_FeaturedPoet_RS.png' ?>"
                alt="Terry Jude Miller stands at a lectern reading a poem to an audience."
                class="img-fluid rounded"
              />
              <figcaption class="figure-caption">
                Terry Jude Miller reading his poetry at the Friendswood Library
                in Friendswood, Texas
              </figcaption>
            </figure>
          </div>
          <!-- Photo 4 - Terry, Kay Ryan, and Robert Hass -->
          <div class="col-md-6 col-lg-4 mb-5 text-center">
            <figure class="figure">
              <img
                src="<?php echo get_template_directory_uri() . '/assets/img/photos/TJM_KayRyan_RobHaas_RS.png' ?>"
                alt="Terry Jude Miller, Kay Ryan, and Robert Hass stand smiling together."
                class="img-fluid rounded"
              />
              <figcaption class="figure-caption">
                Terry Jude Miller with Kay Ryan and Robert Hass
              </figcaption>
            </figure>
          </div>

          <!-- Photo 5 - Terry at Big Ben -->
          <div class="col-md-6 col-lg-4 mb-5 text-center">
            <figure class="figure">
              <img
                src="<?php echo get_template_directory_uri() . '/assets/img/photos/TJM_London_RS.png' ?>"
                alt="Terry wears a jacket and newsboy cap as he poses for a photo with Big Ben clock tower in the near distance."
                class="img-fluid rounded"
              />
              <figcaption class="figure-caption">
                Terry Jude Miller at London poetry reading
              </figcaption>
            </figure>
          </div>
          <!-- Photo 6 - Terry in China -->
          <div class="col-md-6 col-lg-4 mb-5 text-center">
            <figure class="figure">
              <img
                src="<?php echo get_template_directory_uri() . '/assets/img/photos/TJM_TempleOfSoulsRetreat_HangzhouChina_RS.png' ?>"
                alt="Terry smiles standing in front of a wall with carved Chinese calligrapic characters filled with gold."
                class="img-fluid rounded"
              />
              <figcaption class="figure-caption">
                Terry Jude Miller at the Temple of the Soul's Retreat in
                Hangzhou, China
              </figcaption>
            </figure>
          </div>
          <!-- Photo 7 - Terry at Birthplace of Whitman -->
          <div class="col-md-6 col-lg-4 mb-5 text-center">
            <figure class="figure">
              <img
                src="<?php echo get_template_directory_uri() . '/assets/img/photos/TJM_WWBirthplace_RS.png' ?>"
                alt="Terry poses in an overcoat next to a bronze statue of Walt Whitman."
                class="img-fluid rounded"
              />
              <figcaption class="figure-caption">
                Terry Jude Miller at the birthplace of Walt Whitman
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>

    <!-- Poems Section-->
    <!-- TODO: Finish styling poems section -->
    
    <section class="page-section poems text-white bg-primary" id="poems">
      <div class="container">
        <!-- Poems Section Heading-->
        <h2
          class="page-section-heading text-center text-white text-uppercase text-secondary mb-4"
        >
          Selected Poems
        </h2>

        <div class="container mt-5">
          <div class="row justify-content-center">
            <!-- Begin poem nav -->
            <nav class="poem-nav-divider nav nav-pills flex-column col-md-4" id="poetryTab">
              <p class="text-center"><i>Select a poem; it will appear in the pane <span class="d-sm-none d-md-inline">to the right</span><span class="d-none d-sm-inline d-md-none">below</span>.</i></p>
              <a
                class="text-white text-center nav-link active"
                id="poem1-tab"
                data-bs-toggle="tab"
                href="#poem1"
                aria-controls="poem1"
                aria-current="page"
                tabindex="0"
                >the open window</a>
              <a
                class="text-white text-center nav-link"
                id="poem2-tab"
                data-bs-toggle="tab"
                href="#poem2"
                aria-controls="poem2"
                tabindex="0"
                >To Belong</a>
              <a
                class="text-white text-center nav-link"
                id="poem3-tab"
                data-bs-toggle="tab"
                href="#poem3"
                aria-controls="poem3"
                tabindex="0"
                >reunion of old lovers</a>
              <a
                class="text-white text-center nav-link"
                id="poem4-tab"
                data-bs-toggle="tab"
                href="#poem4"
                aria-controls="poem4"
                tabindex="0"
                >visit</a>
            </nav> <!-- End poem nav -->
            <!-- Begin poem content -->
            <div class="tab-content col-md-7 offset-md-1 mx-auto" id="poetryTabContent">
              <div
                class="tab-pane fade show active"
                id="poem1"
                role="tabpanel"
                aria-labelledby="poem1-tab"
              >
                <h3 class="mb-4"><b>the open window</b></h3>

                <p>For Walt Whitman and Ed Folsom</p>

                <p class="staggered blockquote-indent">
                    <span style="--indent: 0;"><i>"Camerado, this is no book,</i></span><br>
                    <span style="--indent: 3;"><i>Who touches this touches a man"</i></span><br>
                    <span style="--indent: 0;"><i>- From </i>Leaves of Grass<i> by Walt Whitman</i></span>
                </p>
                
                <p class="staggered">
                  <span style="--indent: 0;">it's the most enduring thing</span><br />
                  <span style="--indent: 2;">I learn from Whitman, Compadre</span>
                </p>
                
                <p class="staggered">
                  <span style="--indent: 0;">this is no poem,</span><br />
                  <span style="--indent: 3;">   who touches this page, touches my heart</span>
                </p>
                
                <p class="staggered">
                  <span style="--indent: 0;">touches the note that changes</span><br />
                  <span style="--indent: 3;">  the A-chord to A-minor</span>
                </p>
                
                <p class="staggered">
                  <span style="--indent: 0;">this is the codex of infinite translations</span>
                </p>
                
                <p class="staggered">
                  <span style="--indent: 0;">I felt you enter from an open window</span><br />
                  <span style="--indent: 3;">   the heat of your hand raises the temperature</span><br />
                  <span style="--indent: 5;">     of the room, the stanza, the poem</span>
                </p>
                
                <p class="staggered">
                  <span style="--indent: 0;">some of this you already know</span><br />
                  <span style="--indent: 3;">   some you will come to know</span><br />
                  <span style="--indent: 5;">    but there is much more you will</span><br />
                  <span style="--indent: 7;">      never know—that part I leave </span><br />
                  <span style="--indent: 9;">         to you to live out</span>
                </p>
                
                <p class="staggered">
                  <span style="--indent: 0;">all are welcome to join my family</span><br />
                  <span style="--indent: 3;">    tell others you are my daughter</span><br />
                  <span style="--indent: 5;">        you are my son—you just might be</span><br />
                  <span style="--indent: 7;">           in one of the many universes</span>
                </p>
                
                <p class="staggered">
                  <span style="--indent: 0;">what you don't understand, the sea</span><br />
                  <span style="--indent: 3;">   will break down and bring around again</span>
                </p>
                
                <p class="staggered">                  
                  <span style="--indent: 0;">this is sign language for I love you</span><br />
                  <span style="--indent: 3;">   see how my hand trembles</span><br />
                  <span style="--indent: 5;">     as it scurries across the page like a mouse</span><br />
                  <span style="--indent: 7;">       as I place my myself upon this leaf</span>
                </p>
                <p class="publication-attribution">
                  Published in: Bayou Review - University of Houston (2023)
                </p>
              </div> 
              <div
                class="tab-pane fade"
                id="poem2"
                role="tabpanel"
                aria-labelledby="poem2-tab"
              >
                <h3 class="mb-4"><b>To Belong</b></h3>
                
                <p>We'd give our kingdom.</p>

                <p>
                  Sacrifice a white dove,<br />
                  spread its irony blood<br />
                  on our faces.
                </p>

                <p>
                  Memorize incantations,<br />
                  even the words<br />
                  difficult to believe,<br />
                  because the necessity of tribe<br />
                  supersedes the cloak<br />
                  of belief.
                </p>

                <p>
                  We hurry to the cause<br />
                  to secure hierarchy,<br />
                  not for the cause's noble mandate.
                </p>

                <p>
                  We weep when we<br />
                  sleep without another<br />
                  body beside us, no bedsheet<br />
                  is designed for one.
                </p>

                <p>
                  Even those who have no one<br />
                  marry God or darkness.
                </p>
                <p class="publication-attribution">
                  Published in: Welter - University of Baltimore (2023)
                </p>
              </div>
              <div
                class="tab-pane fade"
                id="poem3"
                role="tabpanel"
                aria-labelledby="poem3-tab"
              >
                <h3 class="mb-4"><b>reunion of old lovers</b></h3>

                <p><i>after</i> Reunion <i> by Megan Fernandes</i></p>

                <p>
                  odd interface—potentiometers of patience<br />
                  dashboard lights blink in disbelief the plane<br />
                  has made it around the world again—here<br />
                  we are at the starting point—but the sun<br />
                  has moved into a garage with room<br />
                  for only my Prius—we move to say something<br />
                  then stop—realize the old philosopher<br />
                  is right—the waters of this river are different now—<br />
                  and so are we—and so are we
                </p>

                <p class="publication-attribution">
                  Published in: Jasper's Folly (2023)
                </p>
              </div>
              <div
                class="tab-pane fade"
                id="poem4"
                role="tabpanel"
                aria-labelledby="poem4-tab"
              >
                <h3 class="mb-4"><b>visit</b></h3>
                
                <p><i>To Lyssa Smith</i></p>

                <p>
                  one of the five—she opens the cemetery gate<br />
                  as one would open the door of a church<br />
                  unoiled hinges announce her—she gives the dead<br />
                  her name
                </p>

                <p>
                  because so few come—she comes<br />
                  to tend forgotten graves<br />
                  to hear lonely laments<br />
                  to offer her ear to the hereafter
                </p>

                <p>
                  she walks about the stones<br />
                  drags fallen limbs away<br />
                  brushes detritus from carved callings<br />
                  rights humble plastic flowers<br />
                  in label-less soup cans
                </p>

                <p>
                  the buried are many<br />
                  her hands but two<br />
                  each stone is caressed<br />
                  by the madonna's palm<br />
                  each name is given<br />
                  to the first day of spring
                </p>
                <p class="publication-attribution">
                  Published in: Salmon Creek Journal (2023)
                </p>
              </div> 
            </div> <!-- End poem content -->
          </div>
        </div>
      </div>
      <!-- End container -->
    </section>

    <!-- TODO: Update modal container so it doesn't overflow, but the inner contents can scroll -->
    <!-- Books Modals-->
    <!-- Books Modal 1-->
    <div
      class="books-modal modal fade"
      id="booksModal1"
      tabindex="-1"
      aria-labelledby="booksModal1"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header border-0">
            <button
              class="btn-close"
              type="button"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body pb-5">
            <div class="container">
              <div class="row justify-content-center">
                <!-- Books Modal - Title-->
                <h2
                  class="books-modal-title text-secondary text-center text-uppercase mb-4"
                >
                  The Butterfly Canonical
                </h2>
                <div class="col-12 col-sm-6 my-auto">
                  <!-- Books Modal - Image-->
                  <a
                    href="https://www.lulu.com/shop/terry-jude-miller/the-butterfly-canonical/paperback/product-24047965.html?page=1&pageSize=4"
                    target="_blank"
                    rel="noopener"
                  >
                    <img
                      class="img-fluid rounded mb-5 mx-auto d-block"
                      src="<?php echo get_template_directory_uri() . '/assets/img/books/the-butterfly-canonical-cover.jpeg' ?>"
                      alt="Cover of The Butterfly Canonical, a book of poetry by Terry Jude Miller."
                    />
                  </a>
                </div>
                <div class="col-12 col-sm-6 my-auto">
                  <!-- Books Modal - Text-->
                  <p class="mb-4 lead">
                    This is Miller's third book of poetry that contains several
                    of his award-winning poems. The poems are brief and
                    beautiful, like discovering a butterfly in a large, empty
                    field. All revenue from the sales of this book go to benefit
                    the Mustard Seed Farm and Market charity.
                  </p>
                  <p class="mb-4">
                    <a
                      href="https://www.mustardseedfarmers.org/"
                      target="_blank"
                      rel="noopener"
                      >https://www.mustardseedfarmers.org/</a
                    >
                  </p>
                  <div class="row text-center">
                    <div class="col-12 col-xl-6">
                      <a
                        class="btn btn-success mb-2"
                        href="https://www.lulu.com/shop/terry-jude-miller/the-butterfly-canonical/paperback/product-24047965.html?page=1&pageSize=4"
                        target="_blank"
                        rel="noopener"
                        role="button"
                        >Purchase a Copy</a
                      >
                    </div>
                    <div class="col-12 col-xl-6">
                      <button class="btn btn-danger" data-bs-dismiss="modal">
                        <i class="fas fa-xmark fa-fw"></i>
                        Close Window
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Books Modal 2-->
    <div
      class="books-modal modal fade"
      id="booksModal2"
      tabindex="-1"
      aria-labelledby="booksModal2"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header border-0">
            <button
              class="btn-close"
              type="button"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body text-center pb-5">
            <div class="container">
              <div class="row justify-content-center">
                <!-- Books Modal - Title-->
                <h2
                  class="books-modal-title text-secondary text-center text-uppercase mb-4"
                >
                  What If I Find Only Moonlight?
                </h2>
                <div class="col-12 col-sm-6 my-auto">
                  <!-- Books Modal - Image-->
                  <a
                    href="https://www.lulu.com/shop/terry-miller/what-if-i-find-only-moonlight/paperback/product-13848093.html?page=1&pageSize=4"
                    target="_blank"
                    rel="noopener"
                  >
                    <img
                      class="img-fluid rounded mb-5"
                      src="<?php echo get_template_directory_uri() . '/assets/img/books/what-if-i-find-only-moonlight-cover.jpeg' ?>"
                      alt="Cover of What If I Find Only Moonlight, a book of poetry by Terry Jude Miller."
                    />
                  </a>
                </div>
                <div class="col-12 col-sm-6 my-auto">
                  <!-- Books Modal - Text-->
                  <p class="mb-4 lead">
                    This is Miller's second book of poetry, which includes
                    award-winning poems from his earlier work.
                  </p>
                  <div class="row text-center">
                    <div class="col-12 col-xl-6">
                      <a
                        class="btn btn-success mb-2"
                        role="button"
                        href="https://www.lulu.com/shop/terry-miller/what-if-i-find-only-moonlight/paperback/product-13848093.html?page=1&pageSize=4"
                        target="_blank"
                        rel="noopener"
                        >Purchase a Copy</a
                      >
                    </div>
                    <div class="col-12 col-xl-6">
                      <button class="btn btn-danger" data-bs-dismiss="modal">
                        <i class="fas fa-xmark fa-fw"></i>
                        Close Window
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Books Modal 3-->
    <div
      class="books-modal modal fade"
      id="booksModal3"
      tabindex="-1"
      aria-labelledby="booksModal3"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header border-0">
            <button
              class="btn-close"
              type="button"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body text-center pb-5">
            <div class="container">
              <div class="row justify-content-center">
                <!-- Books Modal - Title-->
                <h2
                  class="books-modal-title text-secondary text-uppercase mb-4"
                >
                  The Drawn Cat's Dream
                </h2>
                <div class="col-12 col-sm-6 my-auto">
                  <!-- Books Modal - Image-->
                  <a
                    href="https://www.amazon.com/Drawn-Cats-Dream-Terry-Miller/dp/1688297243/ref=sr_1_1?keywords=The+Drawn+Cat%27s+Dream&qid=1573386120&sr=8-1"
                    target="_blank"
                  >
                    <img
                      class="img-fluid rounded mb-5"
                      src="<?php echo get_template_directory_uri() . '/assets/img/books/the-drawn-cats-dream-cover.jpg' ?>"
                      alt="Cover of The Drawn Cat's Dream, a book of poetry by Terry Jude Miller. It also features the text 'Poetry Society of Texas' beneath the title, and at the bottom it reads, 'Catherine Case Lubbe Manuscript Prize 2018.'"
                    />
                  </a>
                </div>
                <div class="col-12 col-sm-6 my-auto">
                  <!-- Books Modal - Text-->
                  <p class="mb-4 lead">
                    Winner of the 2018 Catherine Case Lubbe Manuscript Prize and
                    nominated for a Pushcart Prize.
                  </p>
                  <div class="row text-center">
                    <div class="col-12 col-xl-6">
                      <a
                        class="btn btn-success mb-2"
                        role="button"
                        href="https://www.amazon.com/Drawn-Cats-Dream-Terry-Miller/dp/1688297243/ref=sr_1_1?keywords=The+Drawn+Cat%27s+Dream&qid=1573386120&sr=8-1"
                        target="_blank"
                        >Purchase a Copy</a
                      >
                    </div>
                    <div class="col-12 col-xl-6">
                      <button class="btn btn-danger" data-bs-dismiss="modal">
                        <i class="fas fa-xmark fa-fw"></i>
                        Close Window
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Anthology Modals-->
    <!-- Anthology Modal 1-->
    <div
      class="anthology-modal modal fade"
      id="anthologyModal1"
      tabindex="-1"
      aria-labelledby="anthologyModal1"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header border-0">
            <button
              class="btn-close"
              type="button"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body pb-5">
            <div class="container">
              <div class="row justify-content-center">
                <!-- Anthology Modal - Title-->
                <h2
                  class="anthology-modal-title text-secondary text-center text-uppercase mb-4"
                >
                  The Ocotillo Review: <br />Summer 2018, Vol 2.2
                </h2>
                <div class="col-12 col-sm-6 my-auto">
                  <!-- Anthology Modal - Image-->
                  <a
                    href="https://www.kallistogaiapress.org/product/the-ocotillo-review-summer-2018/"
                    target="_blank"
                    rel="noopener"
                  >
                    <img
                      class="img-fluid rounded mb-5 mx-auto d-block"
                      src="<?php echo get_template_directory_uri() . '/assets/img/anthologies/the-ocotillo-review-summer-2018-cover-resized.webp' ?>"
                      alt="Cover of the summer 2018 issue of The Ocotillo Review, a poetry journal."
                    />
                  </a>
                </div>
                <div class="col-12 col-sm-6 my-auto">
                  <!-- Anthology Modal - Text-->
                  <p class="mb-4 lead">
                    Terry Jude Miller's poem, “The Last of Little John” appears
                    in The Octotillo Review.
                  </p>
                  <div class="row text-center">
                    <div class="col-12 col-xl-6">
                      <a
                        class="btn btn-success mb-2"
                        href="https://www.kallistogaiapress.org/product/the-ocotillo-review-summer-2018/"
                        target="_blank"
                        rel="noopener"
                        role="button"
                        >Purchase a Copy</a
                      >
                    </div>
                    <div class="col-12 col-xl-6">
                      <button class="btn btn-danger" data-bs-dismiss="modal">
                        <i class="fas fa-xmark fa-fw"></i>
                        Close Window
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Anthology Modal 2-->
    <div
      class="anthology-modal modal fade"
      id="anthologyModal2"
      tabindex="-1"
      aria-labelledby="anthologyModal2"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header border-0">
            <button
              class="btn-close"
              type="button"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body text-center pb-5">
            <div class="container">
              <div class="row justify-content-center">
                <!-- Anthology Modal - Title-->
                <h2
                  class="anthology-modal-title text-secondary text-center text-uppercase mb-4"
                >
                  Ancient Paths: Issue 17
                </h2>
                <div class="col-12 col-sm-6 my-auto">
                  <!-- Anthology Modal - Image-->
                  <a
                    href="https://www.amazon.com/Ancient-Paths-Skylar-Hamilton-Burris/dp/1478286067"
                    target="_blank"
                    rel="noopener"
                  >
                    <img
                      class="img-fluid rounded mb-5"
                      src="<?php echo get_template_directory_uri() . '/assets/img/anthologies/ancient-paths-issue-17-cover-resized.jpg' ?>"
                      alt="Cover of issue 17 of Ancient Paths, a poetry journal."
                    />
                  </a>
                </div>
                <div class="col-12 col-sm-6 my-auto">
                  <!-- Anthology Modal - Text-->
                  <p class="mb-4 lead">
                    One of Miller's earliest poems appears in Ancient Paths:
                    Issue 17.
                  </p>
                  <div class="row text-center">
                    <div class="col-12 col-xl-6">
                      <a
                        class="btn btn-success mb-2"
                        role="button"
                        href="https://www.amazon.com/Ancient-Paths-Skylar-Hamilton-Burris/dp/1478286067"
                        target="_blank"
                        rel="noopener"
                        >Purchase a Copy</a
                      >
                    </div>
                    <div class="col-12 col-xl-6">
                      <button class="btn btn-danger" data-bs-dismiss="modal">
                        <i class="fas fa-xmark fa-fw"></i>
                        Close Window
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Anthology Modal 3-->
    <div
      class="anthology-modal modal fade"
      id="anthologyModal3"
      tabindex="-1"
      aria-labelledby="anthologyModal3"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header border-0">
            <button
              class="btn-close"
              type="button"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body text-center pb-5">
            <div class="container">
              <div class="row justify-content-center">
                <!-- Anthology Modal - Title-->
                <h2
                  class="anthology-modal-title text-secondary text-uppercase mb-4"
                >
                  The Southern Poetry Anthology, Volume VIII: Texas
                </h2>

                <div class="col-12 col-sm-6 my-auto">
                  <!-- Anthology Modal - Image-->
                  <a
                    href="https://www.amazon.com/Southern-Poetry-Anthology-VIII-Texas/dp/1680030639/"
                    target="_blank"
                  >
                    <img
                      class="img-fluid rounded mb-5"
                      src="<?php echo get_template_directory_uri() . '/assets/img/anthologies/southern-poetry-anthology-volume-viii-texas-cover-resized.jpg' ?>"
                      alt="Cover of The Southern Poetry Anthology volume VIII: Texas, a poetry journal."
                    />
                  </a>
                </div>
                <div class="col-12 col-sm-6 my-auto">
                  <!-- Anthology Modal - Text-->
                  <p class="mb-4 lead">
                    One of Terry Jude Miller's poems about survival through art
                    is published in The Southern Poetry Anthology.
                  </p>
                  <div class="row text-center">
                    <div class="col-12 col-xl-6">
                      <a
                        class="btn btn-success mb-2"
                        role="button"
                        href="https://www.amazon.com/Southern-Poetry-Anthology-VIII-Texas/dp/1680030639/"
                        target="_blank"
                        >Purchase a Copy</a
                      >
                    </div>
                    <div class="col-12 col-xl-6">
                      <button class="btn btn-danger" data-bs-dismiss="modal">
                        <i class="fas fa-xmark fa-fw"></i>
                        Close Window
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Anthology Modal 4-->
    <div
      class="anthology-modal modal fade"
      id="anthologyModal4"
      tabindex="-1"
      aria-labelledby="anthologyModal4"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header border-0">
            <button
              class="btn-close"
              type="button"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body text-center pb-5">
            <div class="container">
              <div class="row justify-content-center">
                <!-- Anthology Modal - Title-->
                <h2
                  class="anthology-modal-title text-secondary text-uppercase mb-4"
                >
                  2019 Texas Poetry Calendar
                </h2>
                <div class="col-12 col-sm-6 my-auto">
                  <!-- Anthology Modal - Image-->
                  <a
                    href="http://www.kallistogaiapress.org/product/2019-texas-poetry-calendar/"
                    target="_blank"
                  >
                    <img
                      class="img-fluid rounded mb-5"
                      src="<?php echo get_template_directory_uri() . '/assets/img/anthologies/2019-texas-poetry-calendar-cover-resized.webp' ?>"
                      alt="Cover of the 2019 Texas Poetry Calendar."
                    />
                  </a>
                </div>
                <div class="col-12 col-sm-6 my-auto">
                  <!-- Anthology Modal - Text-->
                  <p class="mb-4 lead">
                    Another of Terry Jude Miller's award-winning poems appears
                    in the 2019 Texas Poetry Calendar.
                  </p>
                  <div class="row text-center">
                    <div class="col-12 col-xl-6">
                      <a
                        class="btn btn-success mb-2"
                        role="button"
                        href="http://www.kallistogaiapress.org/product/2019-texas-poetry-calendar/"
                        target="_blank"
                        >Purchase a Copy</a
                      >
                    </div>
                    <div class="col-12 col-xl-6">
                      <button class="btn btn-danger" data-bs-dismiss="modal">
                        <i class="fas fa-xmark fa-fw"></i>
                        Close Window
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- TODO: Adjust width of archive modal -->
    <!-- News Archive Modal -->
    <div
      class="modal fade"
      id="newsArchiveModal"
      tabindex="-1"
      aria-labelledby="newsArchiveModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="newsArchiveModalLabel">News Archive</h2>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <h3>2022</h3>
            <div class="row">
              <div class="accordion mt-3" id="newsArchiveAccordion">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="newsArchiveHeadingOne">
                    <button
                      class="accordion-button display-3 collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#newsArchiveCollapseOne"
                      aria-expanded="false"
                      aria-controls="newsArchiveCollapseOne"
                    >
                      11/12/22: Some old news
                    </button>
                  </h2>
                  <div
                    id="newsArchiveCollapseOne"
                    class="accordion-collapse collapse"
                    aria-labelledby="newsArchiveHeadingOne"
                    data-bs-parent="#newsArchiveAccordion"
                  >
                    <div class="accordion-body">
                      <div class="row">
                        <div class="col-6 offset-3">
                          <img
                            src="<?php echo get_template_directory_uri() . '/assets/img/news/dalle-poet-award-placeholder.png' ?>"
                            alt="Terry smiles holding a Dundie award."
                            class="img-fluid rounded mx-auto d-block mb-3"
                          />
                        </div>
                      </div>
                      <p class="lead">
                        Terry Jude Miller, a luminary in the world of
                        contemporary poetry, has once again graced the literary
                        limelight. Recently, he was honored with the prestigious
                        "Lyrical Luminary Award" for his anthology "Whispers of
                        the Silent Muse." This accolade, presented only once
                        every decade, recognizes a poet whose work transcends
                        boundaries and evokes profound emotions, and Miller's
                        latest collection undeniably fits the bill. The poems,
                        described by critics as a "tapestry of human
                        experience," delve deep into the intricacies of love,
                        loss, and life's fleeting moments. With this award,
                        Miller cements his legacy as one of the era's most
                        impactful poets, whose words will undoubtedly resonate
                        for generations to come.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="newsArchiveHeadingTwo">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#newsArchiveCollapseTwo"
                      aria-expanded="false"
                      aria-controls="newsArchiveCollapseTwo"
                    >
                      7/22/22: Some more old news
                    </button>
                  </h2>
                  <div
                    id="newsArchiveCollapseTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="newsArchiveHeadingTwo"
                    data-bs-parent="#newsArchiveAccordion"
                  >
                    <div class="accordion-body">
                      <div class="row">
                        <div class="col-6 offset-3">
                          <img
                            src="<?php echo get_template_directory_uri() . '/assets/img/news/dalle-verses-luminous-deep.png' ?>"
                            alt="Cover of Verses From the Luminous Deep, a poetry book by Terry Jude Miller."
                            class="img-fluid rounded mx-auto d-block mb-3"
                          />
                        </div>
                      </div>
                      <p class="lead">
                        Terry Jude Miller, a renowned name in contemporary
                        poetry, unveils his latest collection, "Verses from the
                        Luminous Deep." Merging ancient whispers with modern
                        sentiments, Miller takes readers on a journey through
                        human emotion's vast landscape. Celebrated for his
                        evocative metaphors from earlier works like "Whispers of
                        the Silent Ether," this new anthology promises a deep
                        dive into life's myriad shades. As the literary world
                        eagerly anticipates its release, Miller readies for a
                        multi-city tour, solidifying his stature as one of our
                        generation's poetic luminaries.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="newsArchiveHeadingThree">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#newsArchiveCollapseThree"
                      aria-expanded="false"
                      aria-controls="newsArchiveCollapseThree"
                    >
                      1/1/22: Other old news
                    </button>
                  </h2>
                  <div
                    id="newsArchiveCollapseThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="newsArchiveHeadingThree"
                    data-bs-parent="#newsArchiveAccordion"
                  >
                    <div class="accordion-body">
                      <div class="row">
                        <div class="col-6 offset-3">
                          <img
                            src="<?php echo get_template_directory_uri() . '/assets/img/news/poetry-reading.png' ?>"
                            alt="An empty podium in a cozy space next to a stack of poetry books surrounded by empty wooden chairs."
                            class="img-fluid rounded mx-auto d-block mb-3"
                          />
                        </div>
                      </div>
                      <p class="lead">
                        Join us for an unforgettable evening with the esteemed
                        Terry Jude Miller as he presents a curated selection of
                        his poetic works. Journey through the vast landscapes of
                        human emotion, enriched by Miller's evocative metaphors
                        and vivid imagery. This event promises a deep immersion
                        into the world of one of contemporary poetry's
                        luminaries. Don't miss the opportunity to experience the
                        resonance of Terry Jude Miller's poetic prowess.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-danger"
              data-bs-dismiss="modal"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

</main><!-- #main -->

<?php get_footer(); ?>