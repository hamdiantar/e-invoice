class Integration
{
    /**
     * [toast makes notification with toaster]
     *
     * @param {string} title [title of notification]
     * @param {string} msg [message tat will be notified]
     * @param {strign} state [just from bootstrap states [ 'success' - 'warning' - 'info' - 'Error' ]]
     */
    toast(title, msg, state)
    {
        if(!isset(toastr)) {
            throw new Error ("Toast Notification Doesn't Exists ... !");
        }
        toastr.options = {
            "closeButton": true,
            "debug": true,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": true,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        toastr[state](title, msg);
    }

    /**
     * [sweetConfirm makes alert confirm using sweet alert]
     * @param {Object} options [sweet alert confirm options]
     * @param {string|Function} success_function [function fired on success case]
     * @param {string|Function} failure_function [function fired on Failure case]
     */
    sweetConfirm(options, success_function, failure_function)
    {

        Swal.fire(options,).then(function(result){
            if(result.value){
                if(is_string(success_function)){
                    eval(success_function);
                }else{
                    success_function();
                }
            }else if(result.dismiss === 'cancel'){
                if(is_string(failure_function)){
                    eval(failure_function);
                }else{
                    failure_function();
                }
            }
        });
    }
}
var integrate = new Integration();
