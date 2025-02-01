<?php if( get_sub_field( 'count-down-include' ) == 'Yes' ) :?>
<section id="contdown-section">
    <div class ="container">
        <div class ="row">
            <div class ="col-sm-12">
                <?php if(!empty(get_sub_field('count-down-heading'))): ?>
                    <h2><?php echo get_sub_field('count-down-heading'); ?></h2>
                <?php endif; ?>
                <?php if(!empty(get_sub_field('count-down-text'))): ?>
                    <p><?php echo get_sub_field('count-down-text'); ?></p>
                <?php endif; ?>
            </div>
            <div class ="col-sm-counter col-sm-12">
                <!-- Start Count + Down -->
                <div class="countdown row">

                    <div  class="countdown-item col-sm-3">
                        <div class="counter-sec-background">
                            <div id="days"></div>
                            <div class="days">Days</div> 
                        </div>
                    </div>

                    <div  class="countdown-item col-sm-3">
                        <div class="counter-sec-background">
                            <div id="hours"></div>
                            <div class="hours">Hours</div> 
                        </div>
                    </div>  
                    <div  class="countdown-item col-sm-3">
                        <div class="counter-sec-background">
                            <div id="minutes"></div>
                            <div class="minutes">Minutes</div> 
                        </div>
                    </div> 
                    <div class="countdown-item col-sm-3">
                        <div class="counter-sec-background">
                            <div id="seconds"></div>
                            <div class="seconds">Seconds</div>
                        </div>
                    </div> 
                </div>
                <!--  end -->
                <script >
                    const countdownDate = new Date("2 10, 2025 12:00:00").getTime();

                    const updateCountdown = () => {
                        const now = new Date().getTime();
                        const distance = countdownDate - now;

                        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        const hours = Math.floor(
                        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
                        );
                        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                        document.getElementById("days").textContent = days;
                        document.getElementById("hours").textContent = hours;
                        document.getElementById("minutes").textContent = minutes;
                        document.getElementById("seconds").textContent = seconds;

                        if (distance < 0) {
                        clearInterval(interval);
                        document.querySelector(".countdown").textContent = "EXPIRED";
                        }
                    };

                    const interval = setInterval(updateCountdown, 1000);
                    updateCountdown();
                </script>
            </div>
        </div>
    </div>
</section> 
<?php endif; ?>