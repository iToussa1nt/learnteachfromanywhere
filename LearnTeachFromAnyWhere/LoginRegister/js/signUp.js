document.getElementById('dateOfBirth').max=new Date().toISOString().split('T')[0];
let radioTeacher = document.getElementById("radioTeacher");
let radioStudent = document.getElementById("radioStudent");
radioStudent.addEventListener('click', hideLessons);
radioTeacher.addEventListener('click', showLessons);
function showLessons(ev){
    document.getElementById("lessons").style.display="grid";
}
function hideLessons(ev){
    document.getElementById("lessons").style.display="none";
}