# AlbumWorks | Test #

## 1st Test ##
For the API test: I deployed the REST API to Heroku which you can access through this link: [AlbumWorksTest](https://albumworkstest.herokuapp.com/)

or just use this plain url: https://albumworkstest.herokuapp.com/

<br>

#### A. LONG PROCESS: Test API using POSTMAN ####
Open **POSTMAN** application. Paste this endpoint: https://albumworkstest.herokuapp.com/letters.php then click **Body** then select **Raw** then
select **JSON** then paste the sample json payload which you can copy below. Then finally, click **Send** button.

#### B. QUICK PROCESS: TEST API using APITester online ####
If you want to **quickly test** the API without installing any application just click this link: [APITester](https://apitester.com/shared/checks/2150050adf2a46b48d9efb0958b4a1e8)
then click the **Test** button. The payload (json data) has alrady been included in  body section.

<br>

The data payload example:
```json
{
	"strings": [
		"a",
		"b",
		"c",
		"d",
		"e",
		"f",
		"g",
		"h",
		"i",
		"j",
		"k",
		"l",
		"m",
		"n",
		"o",
		"p",
		"q",
		"r",
		"s",
		"t",
		"u",
		"v",
		"w",
		"x",
		"y",
		"z"
	]
}
```

<br>

## 2nd Test ##
For the 2nd test: you can find the solution inside /Web/reward.php file.

<br>

The **get_reward_level()** function accepts two parameters: User and Recent Transaction.

The User can be fetched from a database then the recent transaction is the user's current money spent. 

Since there is no database for this test, I just created a dummy user with a default of historic transaction of $25.

So, in order for the user to become White Level member, he/she needs at least $50 all in all spent including his/her

historic plus (+) any recent transactions made. To become a Blue Level member he/she needs at least $125.

To become a Silver Lever member he/she needs at least $1000 overall spent. And for the Gold Level, at least $2000.

```php
// 24 here is the user's recent transaction, equals to $24
// the default historic transaction is $25
// so $25 + $24 = $49
// above code will return a message saying 
// "Spend more to become a White Level member."
get_reward_level($user, 24);

// If the user's recent transaction is $100, then he/she
// will become a Blue Level member and this code will
// return "Blue Level"
get_reward_level($user, 100);
```

<br>
