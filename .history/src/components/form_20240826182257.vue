<template>
    <!-- MultiStep Form -->
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form id="msform">
                <fieldset>
                    <h2 class="fs-title">Personal Details</h2>
                    <h3 class="fs-subtitle">Tell us something more about you</h3>
                    <input type="text" name="fname" placeholder="First Name" />
                    <input type="text" name="lname" placeholder="Last Name" />
                    <input type="text" name="phone" placeholder="Phone" />



                    <div id="select-box">
                        <input type="checkbox" id="options-view-button">
                        <div id="select-button" class="brd">
                            <div id="selected-value">
                                <span>Select a platform</span>
                            </div>
                            <div id="chevrons">
                                <i class="fas fa-chevron-up"></i>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        <div id="options">
                            <div class="option">
                                <input class="s-c top" type="radio" name="platform" value="codepen">
                                <input class="s-c bottom" type="radio" name="platform" value="codepen">
                                <i class="fab fa-codepen"></i>
                                <span class="label">CodePen</span>
                                <span class="opt-val">CodePen</span>
                            </div>
                            <div class="option">
                                <input class="s-c top" type="radio" name="platform" value="dribbble">
                                <input class="s-c bottom" type="radio" name="platform" value="dribbble">
                                <i class="fab fa-dribbble"></i>
                                <span class="label">Dribbble</span>
                                <span class="opt-val">Dribbble</span>
                            </div>
                            <div class="option">
                                <input class="s-c top" type="radio" name="platform" value="behance">
                                <input class="s-c bottom" type="radio" name="platform" value="behance">
                                <i class="fab fa-behance"></i>
                                <span class="label">Behance</span>
                                <span class="opt-val">Behance</span>
                            </div>
                            <div class="option">
                                <input class="s-c top" type="radio" name="platform" value="hackerrank">
                                <input class="s-c bottom" type="radio" name="platform" value="hackerrank">
                                <i class="fab fa-hackerrank"></i>
                                <span class="label">HackerRank</span>
                                <span class="opt-val">HackerRank</span>
                            </div>
                            <div class="option">
                                <input class="s-c top" type="radio" name="platform" value="stackoverflow">
                                <input class="s-c bottom" type="radio" name="platform" value="stackoverflow">
                                <i class="fab fa-stack-overflow"></i>
                                <span class="label">StackOverflow</span>
                                <span class="opt-val">StackOverflow</span>
                            </div>
                            <div class="option">
                                <input class="s-c top" type="radio" name="platform" value="freecodecamp">
                                <input class="s-c bottom" type="radio" name="platform" value="freecodecamp">
                                <i class="fab fa-free-code-camp"></i>
                                <span class="label">FreeCodeCamp</span>
                                <span class="opt-val">FreeCodeCamp</span>
                            </div>
                            <div id="option-bg"></div>
                        </div>
                    </div>




                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
            </form>
            <!-- link to designify.me code snippets -->
            <div class="dme_link">
                <p><a href="http://designify.me/code-snippets-js/" target="_blank">More Code Snippets</a></p>
            </div>
            <!-- /.link to designify.me code snippets -->
        </div>
    </div>
    <!-- /.MultiStep Form -->
</template>

<script>
export default {

}
</script>

<style>
@import url(https://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
*:focus {
    outline: none;
}



/*form styles*/
#msform {
    text-align: center;
    position: relative;
    margin-top: 30px;
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0px;
    box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
    padding: 20px 30px;
    box-sizing: border-box;
    width: 80%;
    margin: 0 10%;

    /*stacking fieldsets above each other*/
    position: relative;
}

/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
    display: none;
}

/*inputs*/
#msform input,
#msform textarea {
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 10px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 13px;
}

#msform input:focus,
#msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #ee0979;
    outline-width: 0;
    transition: All 0.5s ease-in;
    -webkit-transition: All 0.5s ease-in;
    -moz-transition: All 0.5s ease-in;
    -o-transition: All 0.5s ease-in;
}

/*buttons*/
#msform .action-button {
    width: 100px;
    background: #ee0979;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}

#msform .action-button:hover,
#msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #ee0979;
}

#msform .action-button-previous {
    width: 100px;
    background: #C5C5F1;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #C5C5F1;
}

/*headings*/
.fs-title {
    font-size: 18px;
    text-transform: uppercase;
    color: #2C3E50;
    margin-bottom: 10px;
    letter-spacing: 2px;
    font-weight: bold;
}

.fs-subtitle {
    font-weight: normal;
    font-size: 13px;
    color: #666;
    margin-bottom: 20px;
}

/*progressbar*/
#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    /*CSS counters to number the steps*/
    counter-reset: step;
}

#progressbar li {
    list-style-type: none;
    color: white;
    text-transform: uppercase;
    font-size: 9px;
    width: 33.33%;
    float: left;
    position: relative;
    letter-spacing: 1px;
}

#progressbar li:before {
    content: counter(step);
    counter-increment: step;
    width: 24px;
    height: 24px;
    line-height: 26px;
    display: block;
    font-size: 12px;
    color: #333;
    background: white;
    border-radius: 25px;
    margin: 0 auto 10px auto;
}

/*progressbar connectors*/
#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: white;
    position: absolute;
    left: -50%;
    top: 9px;
    z-index: -1;
    /*put it behind the numbers*/
}

#progressbar li:first-child:after {
    /*connector not needed before the first step*/
    content: none;
}

/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,
#progressbar li.active:after {
    background: #ee0979;
    color: white;
}


/* Not relevant to this form */
.dme_link {
    margin-top: 30px;
    text-align: center;
}

.dme_link a {
    background: #FFF;
    font-weight: bold;
    color: #ee0979;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 5px 25px;
    font-size: 12px;
}

.dme_link a:hover,
.dme_link a:focus {
    background: #C5C5F1;
    text-decoration: none;
}








.brd {
    border: 1px solid #e2eded;
    border-color: #eaf1f1 #e4eded #dbe7e7 #e4eded;
}

#info {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    color: #2d3667;
    font-size: 16px;
    text-align: center;
    padding: 14px;
    background-color: #f3f9f9;
}

#app-cover {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    width: 300px;
    height: 42px;
    margin: 100px auto 0 auto;
    z-index: 1;
}

#select-button {
    position: relative;
    height: 16px;
    padding: 12px 14px;
    background-color: #fff;
    border-radius: 4px;
    cursor: pointer;
}

#options-view-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    margin: 0;
    opacity: 0;
    cursor: pointer;
    z-index: 3;
}

#selected-value {
    font-size: 16px;
    line-height: 1;
    margin-right: 26px;
}

.option i {
    width: 16px;
    height: 16px;
}

.option,
.label {
    color: #2d3667;
    font-size: 16px;
}

#chevrons {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 12px;
    padding: 9px 14px;
}

#chevrons i {
    display: block;
    height: 50%;
    color: #d1dede;
    font-size: 12px;
    text-align: right;
}

#options-view-button:checked+#select-button #chevrons i {
    color: #2d3667;
}

.options {
    position: absolute;
    left: 0;
    width: 250px;
}

#options {
    position: absolute;
    top: 42px;
    right: 0;
    left: 0;
    width: 298px;
    margin: 0 auto;
    background-color: #fff;
    border-radius: 4px;
}

#options-view-button:checked~#options {
    border: 1px solid #e2eded;
    border-color: #eaf1f1 #e4eded #dbe7e7 #e4eded;
}

.option {
    position: relative;
    line-height: 1;
    transition: 0.3s ease all;
    z-index: 2;
}

.option i {
    position: absolute;
    left: 14px;
    padding: 0;
    display: none;
}

#options-view-button:checked~#options .option i {
    display: block;
    padding: 12px 0;
}

.label {
    display: none;
    padding: 0;
    margin-left: 27px;
}

#options-view-button:checked~#options .label {
    display: block;
    padding: 12px 14px;
}

.s-c {
    position: absolute;
    left: 0;
    width: 100%;
    height: 50%;
}

.s-c.top {
    top: 0;
}

.s-c.bottom {
    bottom: 0;
}

input[type="radio"] {
    position: absolute;
    right: 0;
    left: 0;
    width: 100%;
    height: 50%;
    margin: 0;
    opacity: 0;
    cursor: pointer;
}

.s-c:hover~i {
    color: #fff;
    opacity: 0;
}

.s-c:hover {
    height: 100%;
    z-index: 1;
}

.s-c.bottom:hover+i {
    bottom: -25px;
    animation: moveup 0.3s ease 0.1s forwards;
}

.s-c.top:hover~i {
    top: -25px;
    animation: movedown 0.3s ease 0.1s forwards;
}

@keyframes moveup {
    0% {
        bottom: -25px;
        opacity: 0;
    }

    100% {
        bottom: 0;
        opacity: 1;
    }
}

@keyframes movedown {
    0% {
        top: -25px;
        opacity: 0;
    }

    100% {
        top: 0;
        opacity: 1;
    }
}

.label {
    transition: 0.3s ease all;
}

.opt-val {
    position: absolute;
    left: 14px;
    width: 217px;
    height: 21px;
    opacity: 0;
    background-color: #fff;
    transform: scale(0);
}

.option input[type="radio"]:checked~.opt-val {
    opacity: 1;
    transform: scale(1);
}

.option input[type="radio"]:checked~i {
    top: 0;
    bottom: auto;
    opacity: 1;
    animation: unset;
}

.option input[type="radio"]:checked~i,
.option input[type="radio"]:checked~.label {
    color: #fff;
}

.option input[type="radio"]:checked~.label:before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: -1;
}

#options-view-button:not(:checked)~#options .option input[type="radio"]:checked~.opt-val {
    top: -30px;
}

.option:nth-child(1) input[type="radio"]:checked~.label:before {
    background-color: #000;
    border-radius: 4px 4px 0 0;
}

.option:nth-child(1) input[type="radio"]:checked~.opt-val {
    top: -31px;
}

.option:nth-child(2) input[type="radio"]:checked~.label:before {
    background-color: #ea4c89;
}

.option:nth-child(2) input[type="radio"]:checked~.opt-val {
    top: -71px;
}

.option:nth-child(3) input[type="radio"]:checked~.label:before {
    background-color: #0057ff;
}

.option:nth-child(3) input[type="radio"]:checked~.opt-val {
    top: -111px;
}

.option:nth-child(4) input[type="radio"]:checked~.label:before {
    background-color: #32c766;
}

.option:nth-child(4) input[type="radio"]:checked~.opt-val {
    top: -151px;
}

.option:nth-child(5) input[type="radio"]:checked~.label:before {
    background-color: #f48024;
}

.option:nth-child(5) input[type="radio"]:checked~.opt-val {
    top: -191px;
}

.option:nth-child(6) input[type="radio"]:checked~.label:before {
    background-color: #006400;
    border-radius: 0 0 4px 4px;
}

.option:nth-child(6) input[type="radio"]:checked~.opt-val {
    top: -231px;
}

.option .fa-codepen {
    color: #000;
}

.option .fa-dribbble {
    color: #ea4c89;
}

.option .fa-behance {
    color: #0057ff;
}

.option .fa-hackerrank {
    color: #32c766;
}

.option .fa-stack-overflow {
    color: #f48024;
}

.option .fa-free-code-camp {
    color: #006400;
}

#option-bg {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    height: 40px;
    transition: 0.3s ease all;
    z-index: 1;
    display: none;
}

#options-view-button:checked~#options #option-bg {
    display: block;
}

.option:hover .label {
    color: #fff;
}

.option:nth-child(1):hover~#option-bg {
    top: 0;
    background-color: #000;
    border-radius: 4px 4px 0 0;
}

.option:nth-child(2):hover~#option-bg {
    top: 40px;
    background-color: #ea4c89;
}

.option:nth-child(3):hover~#option-bg {
    top: 80px;
    background-color: #0057ff;
}

.option:nth-child(4):hover~#option-bg {
    top: 120px;
    background-color: #32c766;
}

.option:nth-child(5):hover~#option-bg {
    top: 160px;
    background-color: #f48024;
}

.option:nth-child(6):hover~#option-bg {
    top: 200px;
    background-color: #006400;
    border-radius: 0 0 4px 4px;
}
</style>
