

function edit(id){
    document.getElementById('record_id').value=id;
    document.getElementById('updateForm').style.display='block';
    document.getElementById('hideEdit').addEventListener('click', hideEdit);
function hideEdit(){
    document.getElementById('updateForm').style.display='none';
}
}

function view(id){
    document.getElementById('viewForm').style.display='block';
    document.getElementById('hideView').addEventListener('click', hideView);
function hideView(){
    document.getElementById('viewForm').style.display='none';
}
}
document.getElementById('addService').addEventListener('click', add);
function add(){
    document.getElementById('addForm').style.display='block';
    document.getElementById('hideAdd').addEventListener('click', hideAdd);
function hideAdd(){
    document.getElementById('addForm').style.display='none';
}
}
