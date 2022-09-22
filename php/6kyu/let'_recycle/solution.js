function recycle(array) {
    var data = {
      'paper': [], 
      'glass': [], 
      'organic':[], 
      'plastic': []
    };
    
    for (var i of array) {
      data[i.material].push(i.type);
      
      if (typeof i.secondMaterial !== "undefined") {
        data[i.secondMaterial].push(i.type);
      }
      
    }
    
    return [
      data['paper'], 
      data['glass'], 
      data['organic'], 
      data['plastic']
    ];
  }