var k;

function studentsignin() {
    var email = document.getElementById("email");
    var password = document.getElementById("password");

    var form = new FormData();
    form.append("email", email.value);
    form.append("password", password.value);



    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            alert(t);
            if (t == "verified") {
                window.location = "studentDashboard.php";
            } else if (t == "unverified") {
                var verificationmodel = document.getElementById("verification_model");
                k = new bootstrap.Modal(verificationmodel);
                k.show();
            } else if (t = "error") {
                window.location = "studentsignin.php";
            } else {
                alert(t);

            };
        }
    };

    r.open("POST", "studentsigninprocess.php", true);
    r.send(form);
}


function veryfy() {

    var v = document.getElementById("vcode");
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {

        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                k.hide();
                window.location = "studentDashboard.php";
            } else { alert(t); }

        }
    };

    r.open("GET", "studentverifyprocess.php?id=" + v.value, true);
    r.send();
}
var k1;

function teachersignin() {
    var email = document.getElementById("email");
    var password = document.getElementById("password");

    var form = new FormData();
    form.append("email", email.value);
    form.append("password", password.value);



    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            alert(t);
            if (t == "verified") {
                window.location = "teacherDashboard.php";
            } else if (t == "unverified") {
                var verificationmodel = document.getElementById("verification_model");
                k1 = new bootstrap.Modal(verificationmodel);
                k1.show();
            } else if (t = "error") {
                window.location = "teachersignin.php";
            } else {
                alert(t);

            }
        }
    };

    r.open("POST", "teachersigninprocess.php", true);
    r.send(form);
}
var k2;

function acadamicsignin() {
    var email = document.getElementById("email");
    var password = document.getElementById("password");

    var form = new FormData();
    form.append("email", email.value);
    form.append("password", password.value);


    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            alert(t);
            if (t == "verified") {
                window.location = "academicDashboard.php";
            } else if (t == "unverified") {
                var verificationmodel = document.getElementById("verification_model");
                k2 = new bootstrap.Modal(verificationmodel);
                k2.show();
            } else if (t = "error") {
                window.location = "academisignin.php";
            } else {


            }
        }
    };

    r.open("POST", "academicsigninprocess.php", true);
    r.send(form);
}

function adminsign() {
    var email = document.getElementById("email");
    var password = document.getElementById("password");

    var form = new FormData();
    form.append("email", email.value);
    form.append("password", password.value);



    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == "") {
                window.location = "adminsignin.php";
            } else if (t == "done") {
                window.location = "adminDashboard.php";
            } else {
                alert(t);

            };
        }
    };

    r.open("POST", "adminsigninprocess.php", true);
    r.send(form);

}

function acadamicveryfy() {

    var v = document.getElementById("vcode");
    var r = new XMLHttpRequest();
    alert(v.value);
    r.onreadystatechange = function() {

        if (r.readyState == 4) {
            var t = r.responseText;
            alert(t);
            if (t == "success") {
                k2.hide();
                window.location = "academicDashboard.php";
            } else { alert(t); }

        }
    };

    r.open("GET", "academicverifyprocess.php?id=" + v.value, true);
    r.send();
}

function teacherveryfy() {

    var v = document.getElementById("vcode");
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {

        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                k1.hide();
                window.location = "teacherDashboard.php";
            } else { alert(t); }

        }
    };

    r.open("GET", "teacherverifyprocess.php?id=" + v.value, true);
    r.send();
}

function signOut() {
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t = "success") {
                window.location = "studentsignin.php";

            }
        }
    };

    r.open("GET", "studentsignOutProcess.php", true);
    r.send();

}

function tsignOut() {
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t = "success") {
                window.location = "teachersignin.php";

            }
        }
    };

    r.open("GET", "teachersignOutProcess.php", true);
    r.send();

}

function asignOut() {
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t = "success") {
                window.location = "adminsignin.php";

            }
        }
    };

    r.open("GET", "adminsignOutProcess.php", true);
    r.send();

}

function acadamicsignOut() {
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t = "success") {
                window.location = "academisignin.php";

            }
        }
    };

    r.open("GET", "acadamicsignOutProcess.php", true);
    r.send();

}


function teacherinvite(id) {
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            alert(t);

            // if (t = "success") {
            //     window.location = "ManageTeachers.php";

            // }
        }
    };

    r.open("GET", "TeacherInvite.php?id=" + id, true);
    r.send();
}

function academicinvite(id) {
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            alert(t);

            if (t = "success") {
                window.location = "ManageAcademic.php";

            }
        }
    };

    r.open("GET", "academicinvite.php?id=" + id, true);
    r.send();
}

function studentinvite(id) {
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            alert(t);

            if (t = "success") {
                window.location = "studentManagebyacademics.php";

            }
        }
    };

    r.open("GET", "studentinvite.php?id=" + id, true);
    r.send();
}


function updateStudentProfile() {
    var name = document.getElementById("name");
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var phone = document.getElementById("phone");
    var address = document.getElementById("address");

    var form = new FormData();
    form.append("name", name.value);
    form.append("email", email.value);
    form.append("password", password.value);
    form.append("phone", phone.value);
    form.append("address", address.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t = "success") {
                window.location = "studentsignin.php";
            }


        }
    };

    r.open("POST", "studentProfileupdateProess.php", true);
    r.send(form);
}


function adminprofileupdate() {
    var name = document.getElementById("name");

    var password = document.getElementById("password");


    var form = new FormData();
    form.append("name", name.value);
    form.append("email", email.value);
    form.append("password", password.value);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t = "success") {
                alert(t);
                window.location = "adminsignin.php";
            }


        }
    };

    r.open("POST", "adminProfileupdateProess.php", true);
    r.send(form);
}

function updateTeacherProfile() {
    var name = document.getElementById("name");
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var phone = document.getElementById("phone");
    var address = document.getElementById("address");

    var form = new FormData();
    form.append("name", name.value);
    form.append("email", email.value);
    form.append("password", password.value);
    form.append("phone", phone.value);
    form.append("address", address.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t = "success") {
                window.location = "teachersignin.php";
            }


        }
    };

    r.open("POST", "teacherProfileupdateProess.php", true);
    r.send(form);
}

function updateacademicProfile() {

    var name = document.getElementById("name");
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var phone = document.getElementById("phone");
    var address = document.getElementById("address");

    var form = new FormData();
    form.append("name", name.value);
    form.append("email", email.value);
    form.append("password", password.value);
    form.append("phone", phone.value);
    form.append("address", address.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t = "success") {
                window.location = "acadamicsignin.php";
            }


        }
    };

    r.open("POST", "academicProfileupdateProess.php", true);
    r.send(form);
}

function uploadLesson() {

    var subject = document.getElementById("subject");
    var lessonname = document.getElementById("lessonname");
    var grade = document.getElementById("grade");
    var date = document.getElementById("date");
    var lesson = document.getElementById("lesson");


    lesson.onchange = function() {
        var form = new FormData();

        form.append("subject", subject.value);
        form.append("lessonname", lessonname.value);
        form.append("grade", grade.value);
        form.append("date", date.value);
        form.append("lesson", lesson.files[0]);
        var r = new XMLHttpRequest();

        r.onreadystatechange = function() {
            if (r.readyState == 4) {
                var t = r.responseText;

                if (t == "Success") {
                    alert(t);
                    window.location = "teacherLessons.php";

                } else {
                    alert(t);
                    window.location = "teacherLessons.php";
                }

            }
        };

        r.open("POST", "uploadLessonsprocess.php", true);
        r.send(form);

    }



}

function uploadAssigment(subject) {

    var lessonname = document.getElementById("name");
    var id = document.getElementById("id");
    var start = document.getElementById("start");
    var end = document.getElementById("end");
    var assigment = document.getElementById("assigment");


    assigment.onchange = function() {
        var form = new FormData();

        form.append("subject", subject);
        form.append("assigmentname", lessonname.value);
        form.append("assigmentid", id.value);
        form.append("start", start.value);
        form.append("end", end.value);
        form.append("assigment", assigment.files[0]);
        var r = new XMLHttpRequest();

        r.onreadystatechange = function() {
            if (r.readyState == 4) {
                var t = r.responseText;

                if (t == "Success") {
                    alert(t);
                    window.location = "teacherassigments.php";

                } else {
                    alert(t);
                    window.location = "teacherassigments.php"
                }

            }
        };

        r.open("POST", "uploadassigmentprocess.php", true);
        r.send(form);

    }
}

function uploadassigment(id) {


    var uploadassigment = document.getElementById("uploadassigment");
    uploadassigment.onchange = function() {
        var form = new FormData();


        form.append("assigmentid", id);
        form.append("assigment", uploadassigment.files[0]);
        var r = new XMLHttpRequest();

        r.onreadystatechange = function() {
            if (r.readyState == 4) {
                var t = r.responseText;

                if (t == "Success") {
                    alert(t);
                    window.location = "assigments.php"

                } else {
                    alert(t);
                    window.location = "assigments.php";
                }

            }
        };

        r.open("POST", "studentuploadassigmentprocess.php", true);
        r.send(form);

    }
}

function addGradeTeacher() {


    var grade = document.getElementById("grade");
    var teacher = document.getElementById("teacher");

    if (grade.value == "0") {
        alert("Please Select grade");
    } else if (teacher.value == "0") {
        alert("Please Select teacher");
    } else {

        var form = new FormData();
        form.append("grade", grade.value);
        form.append("teacher", teacher.value);
        var r = new XMLHttpRequest();
        r.onreadystatechange = function() {
            if (r.readyState == 4) {
                var t = r.responseText;

                if (t == "Success") {
                    alert(t);
                    window.location = "ManageTeachers.php";
                } else { alert(t); }

            }
        };
        r.open("POST", "addGradeTeacherProcess.php", true);
        r.send(form);
    }

}

function addSubjectTeacher() {


    var subject = document.getElementById("subject1");
    var teacher = document.getElementById("teacher1");

    if (subject.value == "0") {
        alert("Please Select subject");
    } else if (teacher.value == "0") {
        alert("Please Select teacher");
    } else {

        var form = new FormData();
        form.append("subject", subject.value);
        form.append("teacher", teacher.value);
        var r = new XMLHttpRequest();
        r.onreadystatechange = function() {
            if (r.readyState == 4) {
                var t = r.responseText;
                if (t == "Success") {
                    alert(t);
                    window.location = "ManageTeachers.php";
                } else { alert(t); }

            }
        };
        r.open("POST", "addSubjectTeacherProcess.php", true);
        r.send(form);
    }

}

function addGradeAcademic() {


    var acadamicgrade = document.getElementById("acadamicgrade");
    var acadamic = document.getElementById("acadamic");

    if (acadamicgrade.value == "0") {
        alert("Please Select Grade");
    } else if (acadamic.value == "0") {
        alert("Please Select acadamic");
    } else {

        var form = new FormData();
        form.append("acadamicgrade", acadamicgrade.value);
        form.append("acadamic", acadamic.value);
        var r = new XMLHttpRequest();
        r.onreadystatechange = function() {
            if (r.readyState == 4) {
                var t = r.responseText;
                if (t == "Success") {
                    alert(t);
                    window.location = "ManageAcademic.php";
                } else { alert(t); }

            }
        };
        r.open("POST", "addGradeAcademicProcess.php", true);
        r.send(form);
    }

}

function payment(r) {

    window.location = "payment.php?price=" + r;
}