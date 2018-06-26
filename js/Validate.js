
      function validate()
      {

         if( document.ValidateForm.firstname.value == "" )
         {
            alert( "Please provide your First Name!" );
            document.ValidateForm.firstname.focus() ;
            return false;
         }

         if( document.ValidateForm.lastname.value == "" )
         {
            alert( "Please provide your Last Name!" );
            document.ValidateForm.lastname.focus() ;
            return false;
         }

         if( document.ValidateForm.Paymentamount.value == "" )
         {
            alert( "Please provide your Payment Amount in Numbers!" );
            document.ValidateForm.Paymentamount.focus() ;
            return false;
         }

         return( true );
      }
