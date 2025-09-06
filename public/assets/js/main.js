$(document).ready(function () {
    console.log("document loaded");

    // **************************************************************
    // **************** Navbar click to that section ****************
    // **************************************************************
    $(".scrool-to").on("click", function () {
        console.log("button clicked");
        const target = $(this).data("target");
        const targetSection = $("#" + target);
        const targetPosition = $(targetSection).offset().top;

        if (targetSection.length) {
            $("html, body").animate({ scrollTop: targetPosition }, 0);
        }

        // ******* hide navbar after going to the desired section *******
        $(".navbar-collapse").collapse("hide");
    });

    // **************************************************************
    // ********** video play single & add class for sizing **********
    // **************************************************************

    // $(".about-video").on("click", function () {
    //     let videos = $(".about-video");

    //     console.log(videos);

    //     videos.each(function () {
    //         $(this)[0].pause();
    //         let native = $(this)[0];
    //     });
    // });
});
