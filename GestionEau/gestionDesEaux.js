function changementCouleurBouton(button)
{
    nomClass = button.className; 
    if (nomClass == "btn btn-danger")
    {
        button.className = "btn btn-success"; 
    }
    else
    {
        button.className = "btn btn-danger"; 
    }
}