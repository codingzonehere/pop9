// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()


  $(document).ready(function(){

    $("#invalidCheck").click(function(){
        $("#CheckBox").toggle(1000);
    });
    $(".invalidCheck").click(function(){
        $("#CheckBox1").toggle(1000);
    });
    $(".invalidCheck1").click(function(){
        $("#CheckBox2").toggle(1000);
    });



    $(".AdultPermission").click(function(){
        $(".AdultContent").toggle(1000);
    });
    
    $(".TravelCondition").click(function(){
        $(".TravelConditionItem").toggle(1000);
    });


    $("#relationShipSelect").click(function(){
        $(".Showrelation").show(1000);
    });
    
    $(".inlineRadio1").click(function(){
        $(".showPrivacy").show(1000);
    });
    $(".inlineRadio2").click(function(){
        $(".showPrivacy").hide(1000);
    });
    
    $(".ItemIttoshow").click(function(){
        $(".showPrivacyItem").show(1000);
    });
    $(".ItemIttoshowNo").click(function(){
        $(".showPrivacyItem").hide(1000);
    }); 
    
    $("#ContentItem").click(function(){
        $(".border-primary").toggle(1000);
    }); 
    
    $("#ContentItem1").click(function(){
        $(".border-secondary").toggle(1000);
    }); 
    
    $("#showContent12").click(function(){
        $(".border-success").toggle(1000);
    }); 
    
    $("#showContent10").click(function(){
        $(".border-danger").toggle(1000);
    }); 
    
    
    
    
  
  });
  
  