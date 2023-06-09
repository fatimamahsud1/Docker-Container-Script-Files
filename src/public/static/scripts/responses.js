function getBotResponse(input) 
{
   
    if (input == "1") {
        return "on limited items <br> enter : list to get list  press 4 to get to main menu ";
    } else if (input == "list") {
        return "discount is on deal1 and deal2 <br> press 4 to get to main menu";
    } else if (input == "4") {
        return "press 1 : for  discount <br> press 2 :for active pacakages<br> press 3 :for branch info ";
    }
    else if(input == "2")
        return "Student Package is Active press <br>press 4 to get to main menu";
    else if(input == "3")
        return "We are serving our customer in Lahore and Islamabad<br>press 4 to get to main menu"

 
    if (input == "hello") {
        return "Hello there! <br> press 1 : for  discount <br> press 2 :for active pacakages<br> press 3 :for branch info";
    } else if (input == "goodbye") {
        return "Have a nice day!";
    } else 
    {
        return "Try asking something else!";
    }
}