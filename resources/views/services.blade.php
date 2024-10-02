<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/global.css') }}">
        <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
        <link rel="stylesheet" href="{{ asset('css/common.css') }}">
        <link rel="stylesheet" href="{{ asset('css/layouts.css') }}">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    </head>
    <body class="">

        @include('layouts.navbar')

        <main class="services-container">
            <section class="services-group">
                <header>
                    <h2 class="title">Wedding Planning Services</h2>
                </header>
                <div class="content">
                    <div class="group-content">
                        <img src="assets/images/services/debut_full_planning_coord.png" alt="">

                        <div class="package-details">
                            <h2>Full Planning & Coordination Package - PHP 30,000.00</h2>

                            <div class="inclusions">
                                <h3>Inclusions:</h3>
                                <ul class="list">
                                    <li>Event Planning</li>
                                    <li>Discounted Rates of Event Supplies</li>
                                    <li>Monthly Meetings & Consultations</li>
                                    <li>On the Day Coordination</li>
                                    <li>(Dress-Up, Ceremony, & Reception)</li>
                                    <li>3-4 ON THE DAY COORDINATORS</li>
                                </ul>
                            </div>

                            <!-- Notes -->
                            <div class="notes">
                                <h3>Notes: Meals are not included. Client should provide meals for the coordinators</h3>
                                <ul class="list">
                                    <li>50% Down Payment must be made upon first meet-up to secure date.</li>
                                    <li>Payment through Cash / GCash / Bank Transfer are accepted.</li>
                                    <li>50% of the remaining balance should be paid on the day of the event.</li>
                                    <li>Down Payments are non-refundable.</li>
                                    <li>Contract is provided.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="group-content">
                        <img src="assets/images/services/on_the_day_coordination.png" alt="">

                        <div class="package-details">
                            <h2>On-The-Day Coordination - PHP 15,000.00</h2>

                            <div class="inclusions">
                                <h3>Inclusions:</h3>
                                <ul>
                                    <li>2 meetings (Meet-up & Final Endorsement)</li>
                                    <li>Limited Consultations</li>
                                    <li>On-the-day Coordination</li>
                                    <li>(Dress-Up, Ceremony, & Reception)</li>
                                    <li>3-4 ON THE DAY COORDINATORS</li>
                                </ul>
                            </div>

                            <div class="notes">
                                <h3>Notes:</h3>
                                <ul class="">
                                    <li>Meals are not included. Client should provide meals for the coordinators.</li>
                                    <li>50% Down Payment must be made upon first meet-up to secure date.</li>
                                    <li>Payment through Cash / GCash / Bank Transfer are accepted.</li>
                                        <li>50% of the remaining balance should be paid on the day of the event.</li>
                                    <li>Down Payments are non-refundable.</li>
                                    <li>Contract is provided.</li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
            </section>
            </section>
            <section class="services-group wedding-packages">
                <header>
                    <h2 class="title">All In Wedding Packages</h2>
                </header>
                <div class="content">
                    <div class="group-content">
                        <img src="assets/images/event-packages/pearl.jpg" alt="">

                        <div class="package-details">
                            <h2>Pearl Wedding Package - PHP 165,000.00</h2>

                            <div class="inclusions">
                                <h3>Best for Intimate Weddings (50 guests)</h3>
                                <h3>Inclusions:</h3>
                                <ul>
                                    <li>Full Planning and Coordination</li>
                                    <li>Catering Services</li>
                                    <li>Special Chairs for VIP Tables</li>
                                    <li>Event Styling (Ceremony & Reception)</li>
                                    <li>Fresh Flowers</li>
                                    <li>Bridal Bouquet</li>
                                    <li>Entourage Bouquets</li>
                                    <li>Groom Boutonniere</li>
                                    <li>Entourage Boutonnieres</li>
                                    <li>Bouquet for Mothers</li>
                                    <li>Lights & Sounds</li>
                                    <li>LED Wall</li>
                                    <li>Bridal Hair & Make-up</li>
                                    <li>1 Lechon</li>
                                    <li>Bridal Car</li>
                                    <li>1 Van</li>
                                    <li>Wedding Host</li>
                                    <li>2 Tier Wedding Cake (Soft Icing)</li>
                                    <li>1 Wine</li>
                                    <li>30 pcs wedding invitations</li>
                                    <li>50 pcs supplier meals</li>
                                    <li>Photo booth (Magnetic)</li>
                                    <li>Special Grooming by a Groomer</li>
                                    <li>Prenuptial Photo Shoot</li>
                                    <li>AVP of Prenup Photos</li>
                                    <li>On the Day Photo and Video Coverage</li>
                                    <li>Drone Shots</li>
                                    <li>Cinematic Wedding Video Highlights (SDE)</li>
                                    <li>Pica-Pica</li>
                                </ul>
                            </div>

                            <!-- <div class="notes">
                                <h3>Notes:</h3>
                                <ul>
                                    <li>Meals are not included. Client should provide meals for the coordinators.</li>
                                    <li>50% Down Payment must be made upon first meet-up to secure date.</li>
                                    <li>Payment through Cash / GCash / Bank Transfer are accepted.</li>
                                    <li>50% of the remaining balance should be paid on the day of the event.</li>
                                    <li>Down Payments are non-refundable.</li>
                                    <li>Contract is provided.</li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <div class="group-content">
                        <img src="assets/images/event-packages/opal.jpg" alt="">

                        <div class="package-details">
                            <h2>Opal Wedding Package - PHP 215,000.00</h2>

                            <div class="inclusions">
                                <h3>Best for 100 guests</h3>
                                <h3>Inclusions:</h3>
                                <ul>
                                    <li>Full Planning and Coordination</li>
                                    <li>Catering Services</li>
                                    <li>Special Chairs for VIP Tables</li>
                                    <li>Event Styling (Ceremony & Reception)</li>
                                    <li>Fresh Flowers</li>
                                    <li>Bridal Bouquet</li>
                                    <li>Entourage Bouquets</li>
                                    <li>Groom Boutonniere</li>
                                    <li>Entourage Boutonnieres</li>
                                    <li>Bouquet for Mothers</li>
                                    <li>Lights & Sounds</li>
                                    <li>LED Wall</li>
                                    <li>Bridal Hair & Make-up</li>
                                    <li>1 Lechon</li>
                                    <li>Bridal Car</li>
                                    <li>1 Van</li>
                                    <li>Wedding Host</li>
                                    <li>2 Tier Wedding Cake (Soft Icing)</li>
                                    <li>1 Wine</li>
                                    <li>30 pcs wedding invitations</li>
                                    <li>50 pcs supplier meals</li>
                                    <li>Photo booth (Magnetic)</li>
                                    <li>Special Grooming by a Groomer</li>
                                    <li>Prenuptial Photo Shoot</li>
                                    <li>AVP of Prenup Photos</li>
                                    <li>On the Day Photo and Video Coverage</li>
                                    <li>Drone Shots</li>
                                    <li>Cinematic Wedding Video Highlights (SDE)</li>
                                    <li>Pica-Pica</li>
                                    <li>Mobile Bar</li>
                                    <li>260 Glambot</li>
                                    <li>Acoustic Singer</li>
                                    <li>Perfume Bar</li>
                                </ul>
                            </div>

                            <!-- <div class="notes">
                                <h3>Notes:</h3>
                                <ul>
                                    <li>Meals are not included. Client should provide meals for the coordinators.</li>
                                    <li>50% Down Payment must be made upon first meet-up to secure date.</li>
                                    <li>Payment through Cash / GCash / Bank Transfer are accepted.</li>
                                    <li>50% of the remaining balance should be paid on the day of the event.</li>
                                    <li>Down Payments are non-refundable.</li>
                                    <li>Contract is provided.</li>
                                </ul>
                            </div> -->
                        </div>

                    </div>
                    <div class="group-content">
                        <img src="assets/images/event-packages/topaz.jpg" alt="">

                        <div class="package-details">
                            <h2>Topaz Wedding Package - PHP 265,000.00</h2>

                            <div class="inclusions">
                                <h3>Best for 120 guests</h3>
                                <h3>Inclusions:</h3>
                                <ul>
                                    <li>Full Planning and Coordination</li>
                                    <li>Catering Services</li>
                                    <li>Special Chairs for VIP Tables</li>
                                    <li>Event Styling (Ceremony & Reception)</li>
                                    <li>Fresh Flowers</li>
                                    <li>Bridal Bouquet</li>
                                    <li>Entourage Bouquets</li>
                                    <li>Groom Boutonniere</li>
                                    <li>Entourage Boutonnieres</li>
                                    <li>Bouquet for Mothers</li>
                                    <li>Lights & Sounds</li>
                                    <li>LED Wall</li>
                                    <li>Bridal Hair & Make-up</li>
                                    <li>1 Lechon</li>
                                    <li>Bridal Car</li>
                                    <li>1 Van</li>
                                    <li>Wedding Host</li>
                                    <li>3 Tier Wedding Cake (Soft Icing)</li>
                                    <li>1 Wine</li>
                                    <li>30 pcs wedding invitations</li>
                                    <li>50 pcs supplier meals</li>
                                    <li>Photo booth (Magnetic)</li>
                                    <li>Special Grooming by a Groomer</li>
                                    <li>Prenuptial Photo Shoot</li>
                                    <li>AVP of Prenup Photos</li>
                                    <li>On the Day Photo and Video Coverage</li>
                                    <li>Drone Shots</li>
                                    <li>Cinematic Wedding Video Highlights (SDE)</li>
                                    <li>Pica-Pica</li>
                                    <li>Mobile Bar</li>
                                    <li>260 Glambot</li>
                                    <li>Acoustic Singer</li>
                                    <li>Perfume Bar</li>
                                    <li>Sparkulars</li>
                                    <li>Bridal Gown Rental</li>
                                    <li>Groom Suit Rental</li>
                                </ul>
                            </div>

                            <!-- <div class="notes">
                                <h3>Notes:</h3>
                                <ul>
                                    <li>Meals are not included. Client should provide meals for the coordinators.</li>
                                    <li>50% Down Payment must be made upon first meet-up to secure date.</li>
                                    <li>Payment through Cash / GCash / Bank Transfer are accepted.</li>
                                    <li>50% of the remaining balance should be paid on the day of the event.</li>
                                    <li>Down Payments are non-refundable.</li>
                                    <li>Contract is provided.</li>
                                </ul>
                            </div>-->
                        </div>
                    </div>
                    <div class="group-content">
                        <img src="assets/images/event-packages/ruby.jpg" alt="">

                        <div class="package-details">
                            <h2>Ruby Wedding Package - PHP 299,000.00</h2>

                            <div class="inclusions">
                                <h3>Best for 105 guests</h3>
                                <h3>Inclusions:</h3>
                                <ul>
                                    <li>Full Planning and Coordination</li>
                                    <li>Catering Services</li>
                                    <li>Special Chairs for VIP Tables</li>
                                    <li>Event Styling (Ceremony & Reception)</li>
                                    <li>Fresh Flowers</li>
                                    <li>Bridal Bouquet</li>
                                    <li>Entourage Bouquets</li>
                                    <li>Groom Boutonniere</li>
                                    <li>Entourage Boutonnieres</li>
                                    <li>Bouquet for Mothers</li>
                                    <li>Lights & Sounds</li>
                                    <li>LED Wall</li>
                                    <li>Bridal Hair & Make-up</li>
                                    <li>6 Entourage Hair & Makeup</li>
                                    <li>1 Lechon</li>
                                    <li>Bridal Car</li>
                                    <li>1 Van</li>
                                    <li>Wedding Host</li>
                                    <li>3 Tier Wedding Cake (Soft Icing)</li>
                                    <li>1 Wine</li>
                                    <li>30 pcs wedding invitations</li>
                                    <li>50 pcs supplier meals</li>
                                    <li>Bridal Robe Rental</li>
                                    <li>Entourage Robes Rental</li>
                                    <li>Ceiling Works w/ 20x20ft Trusses</li>
                                    <li>Photo booth (Magnetic)</li>
                                    <li>Special Grooming by a Groomer</li>
                                    <li>Prenuptial Photo Shoot</li>
                                    <li>AVP of Prenup Photos</li>
                                    <li>On the Day Photo and Video Coverage</li>
                                    <li>Drone Shots</li>
                                    <li>Cinematic Wedding Video Highlights (SDE)</li>
                                    <li>Pica-Pica</li>
                                    <li>Mobile Bar</li>
                                    <li>260 Glambot</li>
                                    <li>Acoustic Singer</li>
                                    <li>Perfume Bar</li>
                                    <li>Sparkulars</li>
                                    <li>Bridal Gown Rental</li>
                                    <li>Groom Suit Rental</li>
                                </ul>
                            </div>

                            <!-- <div class="notes">
                                <h3>Notes:</h3>
                                <ul>
                                    <li>Meals are not included. Client should provide meals for the coordinators.</li>
                                    <li>50% Down Payment must be made upon first meet-up to secure date.</li>
                                    <li>Payment through Cash / GCash / Bank Transfer are accepted.</li>
                                    <li>50% of the remaining balance should be paid on the day of the event.</li>
                                    <li>Down Payments are non-refundable.</li>
                                    <li>Contract is provided.</li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <div class="group-content">
                        <img src="assets/images/event-packages/diamond.jpg" alt="">

                        <div class="package-details">
                            <h2>Diamond Wedding Package - PHP 355,000.00</h2>

                            <div class="inclusions">
                                <h3>Best for 200 guests - PREMIUM PACKAGE</h3>
                                <h3>Inclusions:</h3>
                                <ul>
                                    <li>Full Planning and Coordination</li>
                                    <li>Catering Services</li>
                                    <li>Special Chairs for VIP Tables</li>
                                    <li>Event Styling (Ceremony & Reception)</li>
                                    <li>Fresh Flowers</li>
                                    <li>Bridal Bouquet</li>
                                    <li>Entourage Bouquets</li>
                                    <li>Groom Boutonniere</li>
                                    <li>Entourage Boutonnieres</li>
                                    <li>Bouquet for Mothers</li>
                                    <li>Lights & Sounds</li>
                                    <li>LED Wall</li>
                                    <li>Bridal Hair & Make-up</li>
                                    <li>6 Entourage Hair & Makeup</li>
                                    <li>1 Lechon</li>
                                    <li>Bridal Car</li>
                                    <li>1 Van</li>
                                    <li>Wedding Host</li>
                                    <li>3 Tier Wedding Cake (Soft Icing)</li>
                                    <li>1 Wine</li>
                                    <li>30 pcs wedding invitations</li>
                                    <li>50 pcs supplier meals</li>
                                    <li>Bridal Robe Rental</li>
                                    <li>Entourage Robes Rental</li>
                                    <li>Ceiling Works w/ 20x20ft Trusses</li>
                                    <li>Photo booth (Magnetic)</li>
                                    <li>Special Grooming by a Groomer</li>
                                    <li>Prenuptial Photo Shoot</li>
                                    <li>AVP of Prenup Photos</li>
                                    <li>On the Day Photo and Video Coverage</li>
                                    <li>Drone Shots</li>
                                    <li>Cinematic Wedding Video Highlights (SDE)</li>
                                    <li>Pica-Pica</li>
                                    <li>Mobile Bar</li>
                                    <li>260 Glambot</li>
                                    <li>Acoustic Singer</li>
                                    <li>Perfume Bar</li>
                                    <li>Sparkulars</li>
                                    <li>Bridal Gown Rental</li>
                                    <li>Groom Suit Rental</li>
                                    <li>1 Hotel Room On the Day</li>
                                </ul>
                            </div>

                            <!-- <div class="notes">
                                <h3>Notes:</h3>
                                <ul>
                                    <li>Meals are not included. Client should provide meals for the coordinators.</li>
                                    <li>50% Down Payment must be made upon first meet-up to secure date.</li>
                                    <li>Payment through Cash / GCash / Bank Transfer are accepted.</li>
                                    <li>50% of the remaining balance should be paid on the day of the event.</li>
                                    <li>Down Payments are non-refundable.</li>
                                    <li>Contract is provided.</li>
                                </ul>
                            </div> -->
                        </div>


                    </div>
                </div>
            </section>
            <section class="services-group">
                <header>
                    <h2 class="title">Other Event Coordination for Birthdays</h2>
                </header>
                <div class="content">
                    <div class="group-content">
                        <img src="assets/images/services/event_coordination_birthdays.png" alt="">

                        <div class="package-details">
                            <h2>Event Coordination for Birthdays - PHP 15,000.00</h2>

                            <div class="inclusions">
                                <h3>Inclusions:</h3>
                                <ul>
                                    <li>Event Planning</li>
                                    <li>Monthly Meetings</li>
                                    <li>Unlimited Consultations</li>
                                    <li>On the Day Coordination</li>
                                    <li>(Dress-Up, & Reception)</li>
                                    <li>2 ON THE DAY COORDINATORS</li>
                                </ul>
                            </div>

                            <div class="notes">
                                <h3>Notes:</h3>
                                <ul>
                                    <li>Meals are not included. Client should provide meals for the coordinators.</li>
                                    <li>50% Down Payment must be made upon first meet-up to secure date.</li>
                                    <li>Payment through Cash / GCash / Bank Transfer are accepted.</li>
                                    <li>50% of the remaining balance should be paid on the day of the event.</li>
                                    <li>Down Payments are non-refundable.</li>
                                    <li>Contract is provided.</li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
            <section class="services-group">
                <header>
                    <h2 class="title">Debut Planning Services</h2>
                </header>
                <div class="content">
                    <div class="group-content">
                        <img src="assets/images/services/debut_full_planning_coord.png" alt="">

                        <div class="package-details">
                            <h2>Debut Full Planning & Coordination - PHP 20,000.00</h2>

                            <div class="inclusions">
                                <h3>Inclusions:</h3>
                                <ul>
                                    <li>Event Planning</li>
                                    <li>Monthly Meetings</li>
                                    <li>Unlimited Consultations</li>
                                    <li>On the Day Coordination</li>
                                    <li>(Dress-Up, & Reception)</li>
                                    <li>2 ON THE DAY COORDINATORS</li>
                                </ul>
                            </div>

                            <div class="notes">
                                <h3>Notes:</h3>
                                <ul>
                                    <li>Meals are not included. Client should provide meals for the coordinators.</li>
                                    <li>50% Down Payment must be made upon first meet-up to secure date.</li>
                                    <li>Payment through Cash / GCash / Bank Transfer are accepted.</li>
                                    <li>50% of the remaining balance should be paid on the day of the event.</li>
                                    <li>Down Payments are non-refundable.</li>
                                    <li>Contract is provided.</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="group-content">
                        <img src="assets/images/event-packages/aries.jpg" alt="">

                        <div class="package-details">
                            <h2>Aries All-In Debut Package - PHP 149,000.00</h2>

                            <div class="inclusions">
                                <h3>Inclusions:</h3>
                                <ul>
                                    <li>Full Planning and Coordination</li>
                                    <li>Catering Services</li>
                                    <li>Special Chairs for VIP Tables</li>
                                    <li>Event Styling (Ceremony & Reception)</li>
                                    <li>18 Ecuadorian Roses</li>
                                    <li>Lights & Sounds</li>
                                    <li>LED Wall</li>
                                    <li>Debutant Hair & Makeup</li>
                                    <li>Event Host</li>
                                    <li>2 Tier Cake (Soft Icing)</li>
                                    <li>1 wine</li>
                                    <li>30 pcs invitations</li>
                                    <li>30 pcs supplier meals</li>
                                    <li>Photo booth (Magnetic)</li>
                                    <li>Predebut Shoot Photo & Video</li>
                                    <li>AVP Predebut Shoot Photo</li>
                                    <li>On the Day Photo & Video Coverage</li>
                                    <li>Drone Shots</li>
                                    <li>Cinematic Birthday Video Highlights (SDE)</li>
                                    <li>Debutant Gown</li>
                                    <li>Sparkular</li>
                                </ul>
                            </div>

                            <div class="notes">
                                <h3>Notes:</h3>
                                <ul>
                                    <li>Meals are not included. Client should provide meals for the coordinators.</li>
                                    <li>50% Down Payment must be made upon first meet-up to secure date.</li>
                                    <li>Payment through Cash / GCash / Bank Transfer are accepted.</li>
                                    <li>50% of the remaining balance should be paid on the day of the event.</li>
                                    <li>Down Payments are non-refundable.</li>
                                    <li>Contract is provided.</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="group-content">
                        <img src="assets/images/event-packages/gemini.jpg" alt="">

                        <div class="package-details">
                            <h2>Gemini All-In Debut Package - PHP 200,000.00</h2>

                            <div class="inclusions">
                                <h3>Inclusions:</h3>
                                <ul>
                                    <li>Full Planning and Coordination</li>
                                    <li>Catering Services</li>
                                    <li>Special Chairs for VIP Tables</li>
                                    <li>Event Styling (Ceremony & Reception)</li>
                                    <li>18 Ecuadorian Roses</li>
                                    <li>Lights & Sounds</li>
                                    <li>LED Wall</li>
                                    <li>Debutant Hair & Makeup</li>
                                    <li>Event Host</li>
                                    <li>2 Tier Cake (Soft Icing)</li>
                                    <li>1 wine</li>
                                    <li>30 pcs invitations</li>
                                    <li>Debutant Rose (will be hers)</li>
                                    <li>30 pcs supplier meals</li>
                                    <li>Photo booth (Magnetic)</li>
                                    <li>Predebut Shoot Photo & Video</li>
                                    <li>AVP Predebut Shoot Photo</li>
                                    <li>On the Day Photo & Video Coverage</li>
                                    <li>Drone Shots</li>
                                    <li>Cinematic Birthday Video Highlights (SDE)</li>
                                    <li>Debutant Gown</li>
                                    <li>Sparkulars</li>
                                    <li>1 Hotel Room On the Day</li>
                                </ul>
                            </div>

                            <div class="notes">
                                <h3>Notes:</h3>
                                <ul>
                                    <li>Meals are not included. Client should provide meals for the coordinators.</li>
                                    <li>50% Down Payment must be made upon first meet-up to secure date.</li>
                                    <li>Payment through Cash / GCash / Bank Transfer are accepted.</li>
                                    <li>50% of the remaining balance should be paid on the day of the event.</li>
                                    <li>Down Payments are non-refundable.</li>
                                    <li>Contract is provided.</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="group-content">
                        <img src="assets/images/event-packages/libra.jpg" alt="">

                        <div class="package-details">
                            <h2>Libra All-In Debut Package - PHP 250,000.00</h2>

                            <div class="inclusions">
                                <h3>Inclusions:</h3>
                                <ul>
                                    <li>Full Planning and Coordination</li>
                                    <li>Catering Services</li>
                                    <li>Special Chairs for VIP Tables</li>
                                    <li>Event Styling (Ceremony & Reception)</li>
                                    <li>Ceiling Works w/ 20x20ft Trusses</li>
                                    <li>18 Ecuadorian Roses</li>
                                    <li>Lights & Sounds</li>
                                    <li>LED Wall</li>
                                    <li>Debutant Hair & Makeup</li>
                                    <li>Event Host</li>
                                    <li>2 Tier Cake (Soft Icing)</li>
                                    <li>1 wine</li>
                                    <li>30 pcs invitations</li>
                                    <li>Debutant Rose (will be hers)</li>
                                    <li>30 pcs supplier meals</li>
                                    <li>Photo booth (Magnetic)</li>
                                    <li>Predebut Shoot Photo & Video</li>
                                    <li>AVP Predebut Shoot Photo</li>
                                    <li>On the Day Photo & Video Coverage</li>
                                    <li>Drone Shots</li>
                                    <li>Cinematic Birthday Video Highlights (SDE)</li>
                                    <li>Dessert Buffet</li>
                                    <li>Mobile Bar</li>
                                    <li>360 Glambot</li>
                                    <li>Debutant Gown</li>
                                    <li>Sparkulars</li>
                                    <li>Event Venue (Choice of Tierra Alta/Baly Oriental/The Barn East or West Wing/Cana Retreat)</li>
                                    <li>1 Hotel Room On the Day</li>
                                </ul>
                            </div>

                            <div class="notes">
                                <h3>Notes:</h3>
                                <ul>
                                    <li>Meals are not included. Client should provide meals for the coordinators.</li>
                                    <li>50% Down Payment must be made upon first meet-up to secure date.</li>
                                    <li>Payment through Cash / GCash / Bank Transfer are accepted.</li>
                                    <li>50% of the remaining balance should be paid on the day of the event.</li>
                                    <li>Down Payments are non-refundable.</li>
                                    <li>Contract is provided.</li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
        </main>

        @include('layouts.footer')
        <script src="{{ asset('js/index.js') }}" type="module"></script>
        <script src="{{ asset('js/menuToggle.js') }}" type="module"></script>
        <script src="{{ asset('js/radioCheckboxToggle.js') }}" type="module"></script>
    </body>
</html>

