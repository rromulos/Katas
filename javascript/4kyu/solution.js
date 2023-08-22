function formatDuration(seconds) {
    if (seconds === 0) {
      return "now";
    }
    
    const timeUnits = [
      { unit: "year", duration: 365 * 24 * 60 * 60 },
      { unit: "day", duration: 24 * 60 * 60 },
      { unit: "hour", duration: 60 * 60 },
      { unit: "minute", duration: 60 },
      { unit: "second", duration: 1 }
    ];
    
    const components = [];
    
    for (const unit of timeUnits) {
      if (seconds >= unit.duration) {
        const count = Math.floor(seconds / unit.duration);
        seconds %= unit.duration;
        components.push(`${count} ${unit.unit}${count !== 1 ? 's' : ''}`);
      }
    }
    
    return components.join(', ').replace(/,([^,]*)$/, ' and$1');
  }
  