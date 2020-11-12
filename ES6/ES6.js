//---- Mengubah Script Js Biasa ke ES6

// ---- Arrow Function
  // const golden = function goldenFunction(){
  //     console.log("this is golden!!")
  //   }
   
  //   golden()

//-- Into ES6

const golden = () => {
  console.log("this is golden!!")
} 
golden()


// ---- Object Literal
  // const newFunction = function literal(firstName, lastName){
  //   return {
  //     firstName: firstName,
  //     lastName: lastName,
  //     fullName: function(){
  //       console.log(firstName + " " + lastName)
  //       return 
  //     }
  //   }
  // }
 
  // //Driver Code 
  // newFunction("William", "Imoh").fullName() 

//-- Into ES6

const newFunction = (firstName, lastName) => {
  return {
    firstName,
    lastName,
    fullName: () => {
      console.log(firstName + " " + lastName)
      return 
    }
  }
}
 
//Driver Code 
newFunction("William", "Imoh").fullName() 


// ---- Destruction
  // const newObject = {
  //   firstName: "Harry",
  //   lastName: "Potter Holt",
  //   destination: "Hogwarts React Conf",
  //   occupation: "Deve-wizard Avocado",
  //   spell: "Vimulus Renderus!!!"
  // }

  // const firstName = newObject.firstName;
  // const lastName = newObject.lastName;
  // const destination = newObject.destination;
  // const occupation = newObject.occupation;

  // // Driver code
  // console.log(firstName, lastName, destination, occupation)

//-- Into ES6

const newObject = {
  firstName: "Harry",
  lastName: "Potter Holt",
  destination: "Hogwarts React Conf",
  occupation: "Deve-wizard Avocado",
  spell: "Vimulus Renderus!!!"
}
let {firstName, lastName, destination, occupation, spell} = newObject
// Driver code
console.log(firstName , lastName, destination, occupation, spell)


// ---- Array Spreading
  // const west = ["Will", "Chris", "Sam", "Holly"]
  // const east = ["Gill", "Brian", "Noel", "Maggie"]
  // const combined = west.concat(east)
  // //Driver Code
  // console.log(combined)

//-- Into ES6

const west = ["Will", "Chris", "Sam", "Holly"]
const east = ["Gill", "Brian", "Noel", "Maggie"]
const combined = [...west, ...east]
//Driver Code
console.log(combined)


// ---- Template Literals
  const planet = "earth" 
  const view = "glass" 
  var before = 'Lorem ' + view + 'dolor sit amet, ' + 
        'consectetur adipiscing elit,' + planet + 'do eiusmod tempor ' + 
        'incididunt ut labore et dolore magna aliqua. Ut enim' + 
        ' ad minim veniam'   // Driver Code 
  console.log(before, "\n \n")

//-- Into ES6

  // const planet = "earth" 
  // const view = "glass" 
var before = `Lorem ${view} dolor sit amet, consectetur adipiscing elit, ${planet} ` +
          `do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam`   
// Driver Code 
console.log(before)