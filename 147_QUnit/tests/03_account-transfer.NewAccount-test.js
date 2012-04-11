$(function(){


	module("When creating a new Account",	{
				setup: function(){
					this.account = new Account("12345", 100);
				}
			});
			
			test("Checks_To_Confirm_Opening_Balance_Is_Enough_To_Get_Free_Toaster", function(){
				equals(this.account.balance, 200, "No toaster until your balance is 200 or more");
			});

})