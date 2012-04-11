$(function(){


	
		module("Money Transfer");
			test("Should_Transfer_From_Checking_To_Savings_Successfully", function(){
				
				
				
				equals(savingsAccount.balance, 200);
				equals(checkingAccount.balance, 500);
			});

})