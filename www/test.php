<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    .autocomplete {
        position: relative;
        display: inline-block;

    }

    .autocomplete-items {
        position: absolute;
        border: 1px solid #d4d4d4;
        border-bottom: none;
        border-top: none;
        z-index: 99;
        width: 57.5%;
    }

    .autocomplete-items div {
        padding: 10px;
        cursor: pointer;
        background-color: #fff;
        border-bottom: 1px solid #d4d4d4;
    }

    /*when hovering an item:*/
    .autocomplete-items div:hover {
        background-color: #e9e9e9;
    }

    /*when navigating through the items using the arrow keys:*/
    .autocomplete-active {
        background-color: DodgerBlue !important;
        color: #ffffff;
    }


</style>
</head>
<body>

<h2>Autocomplete</h2>

<p>Start typing:</p>

<!--Make sure the form has the autocomplete function switched off:-->
<form  action="">
    <div  style="width:300px;" class="autocomplete">
        <input id="medicine"  type="text" autocomplete="off" name="myCountry" placeholder="Country">
    </div>
    <input type="submit">
</form>

<script>
    function autocomplete(inp, arr) {
        /*the autocomplete function takes two arguments,
        the text field element and an array of possible autocompleted values:*/
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function(e) {
            var a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) { return false;}
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                    /*create a DIV element for each matching element:*/
                    b = document.createElement("DIV");
                    /*make the matching letters bold:*/
                    b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                    b.innerHTML += arr[i].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    b.addEventListener("click", function(e) {
                        /*insert the value for the autocomplete text field:*/
                        inp.value = this.getElementsByTagName("input")[0].value;
                        /*close the list of autocompleted values,
                        (or any other open lists of autocompleted values:*/
                        closeAllLists();
                    });
                    a.appendChild(b);
                }
            }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function(e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (x) x[currentFocus].click();
                }
            }
        });
        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }
        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }
        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
        });
    }

    /*An array containing all the country names in the world:*/
    var medName = ["Abacavir", "Acetazolamide","Acetylsalicylic", "Aciclovir", "Albendazole","Allopurinol","Amitriptyline","Amoxicillin","Ampicillin", "Artesunate", "Atenolol", "Atropine", "BCG vaccine", "Benzathine benzylpenicillin","Benzyl benzoate","Benzyl penicillin", "Betamethasone","Bleomycin","Bupivacaine", "Calcium gluconate", "Carbamazepine","Chlorambucil","Chloramphenicol", "Chlorhexidine","Chloroquine", "Chlorpheniramine" ,"Chlorpromazine", "Ciprofloxacin", "Cisplatin","Clofazimine","Clotrimazole","Cloxacillin","Cyclophosphamide", "Dapsone", "Dexamethasone","Dextran 70","Diazepam","Didanosine", "Diethylcarbamazine","Digoxin","Diloxanide", "Diphtheria antitoxin","Diptheria vaccine", "Dopamine","Doxorubicin", "Doxycycline", "Efavirenz","Enalapril","Epinephrine", "Ergocalciferol", "Ergometrine", "Erythromycin","Ethambutol", "Ferrous salt", "Fluconazole","Fluorescein", "Fluorouracil","Fluphenazine", "Furosemide","Gentamycin","Glibenclamide", "Gliclazide", "Glucose","Glyceryl trinitrate","Griseofulvin","Haloperidol", "Halothane", "Heparin sodium","Hepatitis B vaccine","Homatropine", "Hydrochlorothiazide", "Hydrocortisone","Hyoscine butylbromide", "Ibuprofen", "Indinavir",  "Isoniazide", "Isosorbide dinitrate", "Ketamine","Lamivudine-3TC", "Levamisole","Levothyroxine","Lidocaine","Mannitol", "Measles vaccine",
    "Mebendazole", "Mefloquine", "Metformin", "Methotrexate", "Methyldopa", "Metoclopramide", "Metronidazole","Miconazole", "Miltefosine","Misoprostol", "Morphine","Naloxone", "Nelfinavir","Neostigmine", "Nevirapine", "Nicotinamide","Nifedipine", "Nitrofurantoin","Nystatin", "Omeprazole", "Oseltamivir", "Oxytocin", "Paracetamol", "Paromomycin", "Permethrin","Pertussis vaccine","Phenobarbital","Phenoxymethylpenicillin", "Phenytoin","Pilocarpine", "Poliomyelitis vaccine", "Prednisolone","Primaquine", "Procainamide", "Procaine benzylpenicllin", "Procarbazine", "Proguanil", "Promethazine","Propranolol","Pyrazinamide", "Pyridoxine", "Pyrimethamine","Quinine", "Rabies vaccine", "Retinol", "Riboflavin", "Rifampicin", "Ritonavir", "Salbutamol","Saquinavir", "Senna","Spironolactone","Stavudine (d4t)", "Streptomycin", "Suxamethonium","Tamoxifen", "Tetanus vaccine","Tetracycline", "Thiamine","Thiopental", "Trimethoprim","Tropicamide","Tuberculin", "Vecuronium","Verapamil", "Vinblastine", "Vincristine", "Vitamin B-Complex",
        "Warfarin", "Xylometazoline Hydrochloride","Zidovudine","Telfast","Fimoxyl","Tushka","Napa","Ambrox","Geston","Esloric","Flexi","Virux","Antiva","Almex","Nixalo","Ambrisan","Tryptin","Apsol","Camlodin","Moxaclav","Entacyd","Alacot DS","Otelast","Ariprex","Lumertam","Zanthin","Anzitor","Flonasin","Zimax","Beclomin","Benzapen","Rex","Orogel","Prosalic","Laxyl","Bromolac",
    "Calcitrol","Calbo-D",
    "Xcid","Canaglif","Carbizol","Loracef","Fodexil","Cefotil","Alatrol","Ciprocin","Climycin","Olicod","Avaspray","Secrin","Trevox","Duolax",
    "Amodis","Inflagic","Vigosol"];

    /*initiate the autocomplete function on the "medicine" element, and pass along the medName array as possible autocomplete values:*/
    autocomplete(document.getElementById("medicine"), medName);
</script>

</body>
</html>
