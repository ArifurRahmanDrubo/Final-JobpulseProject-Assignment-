<div class="modal animated zoomIn" id="deleteadminjob-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h3 class=" mt-3 text-warning">Delete !</h3>
                <p class="mb-3">Once delete, you can't get it back.</p>
                <input class="" id="deleteID"/>

            </div>
            <div class="modal-footer justify-content-end">
                <div>
                    <button type="button" id="delete-modal-close" class="btn mx-2 bg-gradient-primary" data-bs-dismiss="modal">Cancel</button>
                    <button onclick="deletebtnconfirm()" type="button" id="confirmDelete" class="btn  bg-gradient-danger" >Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
   async function deletebtn(button) {
   try {
  
    let id = button.getAttribute('data-id');

    document.getElementById("deleteID").value=id;
    $("#eleteadminjob-modal").modal('show');
   } catch (error) {
    console.error(error);
   }
}




     async  function  deletebtnconfirm(){
        
         try {
            let id = document.getElementById('job_id').value;
            let user_id = document.getElementById('user_id').value;
             document.getElementById('delete-modal-close').click();
             console.log(id);
             console.log(user_id);

             showLoader();
             let res=await axios.post("/deleteadmin-job",{id:id,user_id:user_id},HeaderToken())
             hideLoader();

             if(res.data['status']==="success"){
                 successToast(res.data['message'])
                 window.location.href = "/admin/jobs";
             }
             else{
                 errorToast(res.data['message'])
             }

         }catch (e) {
             unauthorized(e.response.status)
         }
     }
   
</script>