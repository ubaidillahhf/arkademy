function hitungPohon(tinggiAwal, tahun){
	  let initTinggi = tinggiAwal
    let initTahun = 2021
    let totalTinggi = 0
 
  
    for(i=0;i<tahun;i++){
      let musimSemi = initTinggi+1
      let musimPanas = (musimSemi*3)
      let musimGugur = musimPanas-1.5
      let musimDingin = ((15/100)*musimGugur)+musimGugur
      
      
      if(initTahun%2 == 0){
        totalTinggi = totalTinggi+musimDingin/2
      }else{
        totalTinggi = totalTinggi+musimDingin
      }
      
      initTahun = initTahun+1
      
    }
   
    return totalTinggi
}

console.log(hitungPohon(2,2))