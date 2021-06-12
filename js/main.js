// Menu Bar Start

$('.dropbtn').click(function(){
  $('.dropdown').toggleClass('display');
})
$('.dropbtn-1').click(function(){
  $('.dropdown-2').toggleClass('display');      
})
$('.dropbtn-2').click(function(){
  $('.dropdown-3').toggleClass('display');
})
$('.dropbtn-3').click(function(){
  $('.dropdown-4').toggleClass('display');
})
$('.fa-bars').click(function(){
  $('.menu-content').toggle();
})

// Menu Bar End

// Main Slider Start

$('.main-slider-img').slick({
  autoplay: true,
  autoplaySpeed: 5000,
  centerMode:true,
  centerPadding: '120px',
  speed:1200,
  dots: true,
  arrows:false,
  infinite: true,
  pauseOnHover: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1500,
      settings: {
        slidesToShow: 1,
        centerPadding: '60px'
      }
    },
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 1,
        centerPadding: '120px'
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        centerPadding: '90px'
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        centerPadding: '60px'
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        centerPadding: '15px'
      }
    },  
    {
      breakpoint: 420,
      settings: {
        slidesToShow: 1,
        centerPadding: '10px'
      }
    }
  ]
});

// Main Slider End

// Most Popular Courses Slider Start

$('.most-popular-courses').slick({
  autoplay: true,
  autoplaySpeed: 5000,
  centerMode:true,
  centerPadding: '45px',
  speed:1200,
  dots: false,
  arrows:false,
  infinite: true,
  pauseOnHover: false,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1500,
      settings: {
        slidesToShow: 4,
        centerPadding: '70px'
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        centerPadding: '35px'
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        centerPadding: '60px'
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        centerPadding: '35px'
      }
    },
    {
      breakpoint: 420,
      settings: {
        slidesToShow: 1,
        centerPadding: '100px'
      }
    },
    {
      breakpoint: 350,
      settings: {
        slidesToShow: 1,
        centerPadding: '70px'
      }
    }
  ]
});

// Most Popular Courses Slider End

// Most Popular Videos Slider Start

$('.most-popular-videos').slick({
  autoplay: true,
  autoplaySpeed: 5000,
  centerMode:true,
  centerPadding: '28px',
  speed:1200,
  dots: false,
  arrows:false,
  infinite: true,
  pauseOnHover: false,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1500,
      settings: {
        slidesToShow: 4,
        centerPadding: '70px'
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        centerPadding: '35px'
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        centerPadding: '60px'
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        centerPadding: '35px'
      }
    },
    {
      breakpoint: 420,
      settings: {
        slidesToShow: 1,
        centerPadding: '100px'
      }
    },
    {
      breakpoint: 350,
      settings: {
        slidesToShow: 1,
        centerPadding: '70px'
      }
    }
  ]
});


// Most Popular Videos Slider End

//Commonly Asked Doubts Start

$('.commonly-asked-doubts').slick({
  centerMode: true,
  centerPadding: '40px',
  slidesToShow: 2,
  autoplay: true,
  autoplaySpeed: 4500,
  arrows: false,
  dots: false,
  pauseOnHover: false,
  responsive: [
    {
      breakpoint: 1700,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '110px',
        slidesToShow: 2
      }
    },
    {
      breakpoint: 1400,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 2
      }
    },
    {
      breakpoint: 1025,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '230px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 800,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '800px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 600,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '80px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 490,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '50px',
        slidesToShow: 1
      }
    }
  ]
});


//Commonly Asked Doubts End

//Recently Joined Students Start

$('.recently-joined-students').slick({
  centerMode: true,
  centerPadding: '40px',
  slidesToShow: 2,
  autoplay: true,
  autoplaySpeed: 4500,
  arrows: false,
  dots: false,
  pauseOnHover: false,
  responsive: [
    {
      breakpoint: 1700,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '80px',
        slidesToShow: 5
      }
    },
    {
      breakpoint: 1400,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '130px',
        slidesToShow: 4
      }
    },
    {
      breakpoint: 1025,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '90px',
        slidesToShow: 4
      }
    },
    {
      breakpoint: 800,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '65px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '30px',
        slidesToShow: 2
      }
    }
  ]
});


//Recently Joined Students End

//Our Teachers Start

$('.our-teachers').slick({
  centerMode: true,
  centerPadding: '40px',
  slidesToShow: 2,
  autoplay: true,
  autoplaySpeed: 4800,
  arrows: false,
  dots: false,
  pauseOnHover: false,
  responsive: [
    {
      breakpoint: 1700,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '80px',
        slidesToShow: 5
      }
    },
    {
      breakpoint: 1400,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '130px',
        slidesToShow: 4
      }
    },
    {
      breakpoint: 1025,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '90px',
        slidesToShow: 4
      }
    },
    {
      breakpoint: 800,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '65px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '30px',
        slidesToShow: 2
      }
    }
  ]
});


//Our Teachers End

//Our Ratings Start

$('.our-ratings').slick({
  centerMode: true,
  centerPadding: '40px',
  slidesToShow: 2,
  autoplay: true,
  autoplaySpeed: 5000,
  arrows: false,
  dots: false,
  pauseOnHover: false,
  responsive: [
    {
      breakpoint: 1700,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 5
      }
    },
    {
      breakpoint: 1400,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '130px',
        slidesToShow: 4
      }
    },
    {
      breakpoint: 1025,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 4
      }
    },
    {
      breakpoint: 800,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '45px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '15px',
        slidesToShow: 2
      }
    }
  ]
});


//Our Ratings End

//Top Running Courses Start

$('.top-running-courses').slick({
  centerMode: true,
  centerPadding: '40px',
  slidesToShow: 2,
  autoplay: true,
  autoplaySpeed: 4800,
  arrows: false,
  dots: false,
  pauseOnHover: false,
  responsive: [
    {
      breakpoint: 1700,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '80px',
        slidesToShow: 5
      }
    },
    {
      breakpoint: 1400,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '80px',
        slidesToShow: 4
      }
    },
    {
      breakpoint: 1025,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '90px',
        slidesToShow: 4
      }
    },
    {
      breakpoint: 800,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '20px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '83px',
        slidesToShow: 1
      }
    }
  ]
});

//Top Running Courses End

// Courses Price Card Slider Start

$('.subjects').slick({
  autoplay: true,
  autoplaySpeed: 1000,
  centerMode:true,
  centerPadding: '50px',
  speed:1200,
  dots: true,
  arrows:false,
  infinite: true,
  pauseOnHover: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1500,
      settings: {
        slidesToShow: 4,
        centerPadding: '15px'
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        centerPadding: '60px'
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        centerPadding: '60px'
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        centerPadding: '15px'
      }
    },
    {
      breakpoint: 420,
      settings: {
        slidesToShow: 1,
        centerPadding: '50px'
      }
    }
  ]
});

// Courses Price Card Slider End

// Partner's Slider Start

$(document).ready(function () {
$ ('.partners-img').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 4,
        }
      },
      {
        breakpoint: 420,
        settings: {
          slidesToShow: 2,
        }
      }
    ]
  });
  });

  // Partner's Slider End

  // Price Card Start

// Get the elements with class="column"
function crash(){
  document.getElementById('crash-course').style.display="inherit";
  document.getElementById('normal-course').style.display="none";
  document.getElementById('crash-btn').style.color="white";
  document.getElementById('crash-btn').style.background="#4c3b8c";
  document.getElementById('normal-btn').style.color="inherit";
  document.getElementById('normal-btn').style.background="rgba(76, 59, 140, 0.7)";
}
function normal(){
  document.getElementById('crash-course').style.display="none";
  document.getElementById('normal-course').style.display="inherit";
  document.getElementById('crash-btn').style.color="inherit";
  document.getElementById('crash-btn').style.background="rgba(76, 59, 140, 0.7)";
  document.getElementById('normal-btn').style.color="white";
  document.getElementById('normal-btn').style.background="#4c3b8c";
}
//Price Card End

// Course Videos Details Start

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
// Course Videos Details End

// Video Player Start
var player = videojs('my-video',{
  playbackRates:[0.25,0.5,1,1.5,2,2.5,3,3.5,4,4.5],
  plugins:{
    hotkeys:{
    }
  }
});

player.qualityPickerPlugin();

player.play();

//Video Player End


