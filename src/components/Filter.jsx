import React, { useState } from "react";
import { FormControl, InputLabel, Select, MenuItem } from "@mui/material";

export default function Filter() {
  const [eventType, setEventType] = useState("");
  //   const [eventDate, setEventDate] = useState("");
  //   const [eventLocation, setEventLocation] = useState("");

  const handleChange = (event) => {
    setEventType(event.target.value);
  };
  return (
    <>
      <FormControl sx={{ m: 1, minWidth: 250 }}>
        <InputLabel id="event-type">Event Type</InputLabel>
        <Select
          labelId="event-type"
          id="event-type"
          value={eventType}
          label="Event Type"
          onChange={handleChange}
        >
          <MenuItem value={10}>Бiг</MenuItem>
          <MenuItem value={20}>Велоспорт</MenuItem>
          <MenuItem value={30}>Веслування</MenuItem>
        </Select>
      </FormControl>
      <FormControl sx={{ m: 1, minWidth: 250 }}>
        <InputLabel id="event-date">Event Date</InputLabel>
        <Select
          labelId="event-date"
          id="event-date"
          value={eventType}
          label="Event Date"
          onChange={handleChange}
        >
          <MenuItem value={10}>Бiг</MenuItem>
          <MenuItem value={20}>Велоспорт</MenuItem>
          <MenuItem value={30}>Веслування</MenuItem>
        </Select>
      </FormControl>
      <FormControl sx={{ m: 1, minWidth: 250 }}>
        <InputLabel id="event-location">Event Location</InputLabel>
        <Select
          labelId="event-location"
          id="event-location"
          value={eventType}
          label="Event Location"
          onChange={handleChange}
        >
          <MenuItem value={10}>Бiг</MenuItem>
          <MenuItem value={20}>Велоспорт</MenuItem>
          <MenuItem value={30}>Веслування</MenuItem>
        </Select>
      </FormControl>
    </>
  );
}
