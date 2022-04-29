function getDoctorsByService(service_id){
    fetch(`/get-doctors-by-service?service_id=${service_id}`).then(async response =>{
        let doctors = await response.json();
        let doctorsInSelect = document.querySelector("select[name=\"doctor_id\"]");
        doctorsInSelect.innerHTML = "";
        for(let doctor of doctors){
            let option = document.createElement("option");
            option.value =doctor.id;
            option.innerText= doctor.fullname;
            doctorsInSelect.appendChild(option);
        }
    })
}
function getTime(){
    let doctor_id = document.querySelector('[name="doctor_id"]').value
    let date = document.querySelector('[name="date"]').value
    let service_id = document.querySelector('[name="service_id"]').value;
    if(service_id && doctor_id && date )
    fetch(`/get-time?date=${date}&doctor_id=${doctor_id}&service_id=${service_id}`).then(async c => {
         let freeTimes= await c.json();
         let timeElement=document.querySelector("[name=\"time\"]");
         timeElement.innerHTML="";
         for(freeTime of freeTimes){
             let option= document.createElement("option");
             option.value= freeTime;
             option.innerText= freeTime;
             timeElement.appendChild(option);
         }
    })
    
}