// $('.slider').slick({
//   infinite: false,
//   autoplay: true,
//   centerMode: true,
//   autoplaySpeed: 2000,
//   slidesToShow:5,
//   slidesToScroll: 4,
//   dots: true,
//   responsive: [
//     {
//       breakpoint: 1924,
//       settings: {
//         slidesToShow: 5,
//         slidesToScroll: 5,
//         infinite: true,
//       }
//     },

//     {
//       breakpoint: 1424,
//       settings: {
//         slidesToShow: 5,
//         slidesToScroll: 5,
//         infinite: true,
//       }
//     },

//     {
//       breakpoint: 1224,
//       settings: {
//         slidesToShow: 4,
//         slidesToScroll: 4,
//         infinite: true,
//       }
//     },

//     {
//       breakpoint: 990,
//       settings: {
//         slidesToShow: 3,
//         slidesToScroll: 3,
//         infinite: true,
//       }
//     },

//     {
//       breakpoint: 824,
//       settings: {
//         slidesToShow: 3,
//         slidesToScroll: 3,
//         infinite: true,
//       }
//     },


//     {
//       breakpoint: 763,
//       settings: {
//         slidesToShow: 2.5,
//         slidesToScroll: 2.5,
//         arrows: false
//       }
//     },


//     {
//       breakpoint: 510,
//       settings: {
//         slidesToShow: 2.3,
//         slidesToScroll: 2.3,
//         centerMode: true,
//         arrows: false
//       }
//     },

//     {
//       breakpoint: 470,
//       settings: {
//         slidesToShow: 1,
//         centerMode: true,
//         slidesToScroll: 1,
//         arrows: false
//       }
//     },

//     {
//       breakpoint: 430,
//       settings: {
//         slidesToShow: 1.7,
//         centerMode: true,
//         slidesToScroll:1.7,
//         arrows: false
//       }
//     },
//     {
//       breakpoint: 364,
//       settings: {
//         slidesToShow: 1.5,
//         centerMode: true,
//         slidesToScroll:1.5,
//         arrows: false
//       }
//     }
 
//   ]
// });

$('.slider').slick({
  centerMode: true,
  autoplay: true,
  centerPadding: '40px',
  slidesToShow: 3,
  // speed:1500,
  // index: 2,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '30px',
        slidesToShow: 1,
      }
    },


  ]
});

$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});