const cars = document.querySelectorAll(".data-ref");

function getData(){
    
    let targetURL = `./includes/connect.php?main=${this.id}`; //php modle
    //whenever we clicj on a thumbnail, pass its id to the php

    fetch(targetURL)
    .then(res=>res.json())
    .then(data => {
        console.log(data)
        showData(data[0]);
    })
    .catch(function(error){
        console.log(error);
    });
}

function showData(data){
  const {memberName, memberAge, memberPosition}=data;
    document.querySelector(".memberName").textContent = memberName;
    document.querySelector(".memberAge").textContent = memberAge;
    document.querySelector(".memberPosition").textContent = memberPosition;

}

cars.forEach(car => car.addEventListener("click",getData));

//getData();