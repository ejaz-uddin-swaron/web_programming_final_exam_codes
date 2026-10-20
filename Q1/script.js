let items = [];
let subtotal = 0;
let total_quantity = 0;
let discount= 0;
let vat;
let grand_total;

function display()
{
    let name = document.getElementById("name").value;
    let price = Number(document.getElementById("price").value);
    let quantity = Number(document.getElementById("quantity").value);

    if(name == "" || price <= 0 || (quantity <=  0))
    {
        document.getElementById("output").innerHTML += "Invalid Item" + "<br>";
        return;
    }

    subtotal +=  price * quantity;
    total_quantity += quantity;

    if(subtotal >= 5000) 
    {
        discount = subtotal  * 0.1;
    }
    else if(subtotal >= 2000 && subtotal < 5000)
    {
        discount = subtotal * 0.05;
    }

    vat = 0.05 * (subtotal - discount);
    grand_total = subtotal - discount + vat;
    items.push(name);

    total_quantity.toFixed(2);
    subtotal.toFixed(2);
    discount.toFixed(2);
    vat.toFixed(2);
    grand_total.toFixed(2);

    document.getElementById("output").innerHTML += "Items: " + items + ", " + "Qty: " + total_quantity + ", " + "Subtotal: " + subtotal + ", " + "Discount: " + discount + ", " + "VAT: " + vat  + ", " + "Grand Total: " + grand_total + "<br>";   

    if(total_quantity > 20)
    {
        document.getElementById("output").innerHTML += ", Bulk order! Free delivery" + "<br>";
    }
}