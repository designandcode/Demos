
	function Account(accountNumber, balance)
			{
				this.accountNumber = accountNumber;
				this.balance = balance;
			}
		Account.prototype.Transfer = function(toAccount, amount)
			{
				toAccount.balance += amount;
				this.balance = this.balance - amount;
			}
			
	
		
	