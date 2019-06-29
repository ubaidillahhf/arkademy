function getBiodataSaya(){
    let biodata = {
        name: "Ubaidillah Hakim Fadly",
        age: 21,
          address: "Jl. Kembang Kertas 12b Malang, East Java",
          hobbies: ["Travelling", "Badmintin", "Coding"],
          is_married: false,
          list_school: [{name:"SDN Kalisampurno 1 Tanggulangin", year_in: 2003, year_out: 2009, major: null},
                      {name:"SMPIT Al-Kahfi Tarik Sidoarjo", year_in: 2009, year_out: 2012, major: null},
                      {name:"SMA Ar-Rohmah Malanh", year_in: 2012, year_out: 2015, major: null},
                      {name:"Universitas Brawijaya", year_in: 2015, year_out: 2019, major: "Teknik Informatika"}],
          skills: [{skill_name: "Java", level: "advanced"},
                 {skill_name: "c#", level: "beginner"},
                 {skill_name: "PHP", level: "advanced"},
                 {skill_name: "Javascript", level: "advanced"},
                 {skill_name: "ReactJs", level: "beginner"},
                 {skill_name: "VueJs", level: "beginner"},
                 {skill_name: "HTML", level: "advanced"},
                 {skill_name: "CSS", level: "advanced"},
                 {skill_name: "Design", level: "advanced"}],
          interest_in_coding: true
    }
    
    let convertToJson = JSON.stringify(biodata)
    return convertToJson
    }
    
    console.log(getBiodataSaya())