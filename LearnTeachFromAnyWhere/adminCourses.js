document.getElementById('delete').addEventListener('click', remove);
function remove(){
    let removedId= prompt("Enter the id of the lesson you want to delete: ");
    return removedId;
}
document.getElementById('edit').addEventListener('click', edit);
function edit(){
    document.getElementById('updateForm').style.display='block';
}
document.getElementById('hideEdit').addEventListener('click', hideEdit);
function hideEdit(){
    document.getElementById('updateForm').style.display='none';
}
document.getElementById('view').addEventListener('click', view);
function view(){
    document.getElementById('viewForm').style.display='block';
}
document.getElementById('hideView').addEventListener('click', hideVView);
function hideView(){
    document.getElementById('viewForm').style.display='none';
}