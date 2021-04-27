$(function() {
    $('#errorMsg1').hide();
    $('#errorMsg2').hide();

    var error = 0;

    $("#name1").focusout(function() {
        checkName1();
    });
    $("#name2").focusout(function() {
        checkName2();
    });

    function checkName1() {
        var pattern = /^[a-zA-Z]*$/;
        var name1 = $("#name1").val()
        if (pattern.test(name1) && name1 !== '') {
            $('#errorMsg1').hide();
        } else {
            $('#errorMsg1').html("Enter a Valid Name!");
            $('#errorMsg1').show();
            $("#name1").css("box-shadow", "0 0 0 .25rem rgba(253, 13, 13, 1)");
            error = error + 1;
        }
    }

    function checkName2() {
        var pattern = /^[a-zA-Z]*$/;
        var name2 = $("#name2").val()
        if (pattern.test(name2) && name2 !== '') {
            $('#errorMsg2').hide();
        } else {
            $('#errorMsg2').html("Enter a Valid Name!");
            $('#errorMsg2').show();
            $("#name2").css("box-shadow", "0 0 0 .25rem rgba(253, 13, 13, 1)");
            error = error + 1;
        }
    }

    $('#love_form').submit(function() {
        error = 0;

        checkName1();
        checkName2();

        if (error > 0) {
            alert("Please Enter the Names Correctly!!");
            return false;
        } else {
            return true;
        }
    });
});