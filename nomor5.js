function pisahkan(nomor)
{
  let outputArray = []
  let data = nomor.toString().split(0);
  
  data.forEach(function(item){
    let separateToArray = Array.from(item).map(Number)
    let sortingProcess = separateToArray.sort(sortNumber)
    outputArray = outputArray.concat(sortingProcess)
  })
  
  let delimiterArray = outputArray.join('')
  return parseInt(delimiterArray);
  
}

function sortNumber(a, b) {
  return a - b;
}

console.log(pisahkan(986909987014245))