// const TaskName = document.getElementById("TaskName");
// listcontainer = document.getElementById( "ListContainer" );

// function addTask(){
//     if(TaskName.value === "Enter task name"){
//         alert('Please enter a valid task name');
//     }else {
//         let li =  document.createElement("li");
//         li.innerHTML = TaskName.value;
//         listContainer.appendChild(li);
//         let span = document.createElement("span");
//         span.innerHTML = "\u00D7";
//         li.appendChild(span);
//         saveData();
// }
// TaskName.value = ';';
// }

// listContainer.addEventeListener("click", function(e){
//     if(e.target.tagName === "LI"){
//         e.target.classList.toggle("checked");
//         saveData();
//     }else if(e.target.tagName === "SPAN"){
//         e.target.parentElement.remove();
//         saveData();
//     }
// }, false);

// function saveData(){
//     localStorage.setItem("data", listContainer.innerHTML);
// }

// function showTask(){
//     listContainer.innerHTML = localStorage.getItem("data");
// }
