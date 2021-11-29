import React, { useState } from "react";
import { FormControl, InputLabel, Select, MenuItem } from "@mui/material";
import { createStyles, makeStyles } from "@mui/styles";

const useStyles = makeStyles(() =>
  createStyles({
    wrap: {
      width: "100%",
      display: "flex",
      justifyContent: "space-between",
      marginBottom: "30px",
    },
  })
);

export default function Filter() {
  const [eventType, setEventType] = useState("");
  const [eventDate, setEventDate] = useState("");
  const [eventLocation, setEventLocation] = useState("");
  const classes = useStyles();

  const handleChange = (event, filterType) => {
    console.log(filterType);
    filterType === "category" && setEventType(event.target.value);
    filterType === "date" && setEventDate(event.target.value);
    filterType === "location" && setEventLocation(event.target.value);
  };

  return (
    <div className={classes.wrap}>
      <FormControl sx={{ m: 1, width: "100%" }}>
        <InputLabel id="event-type">Категорiя</InputLabel>
        <Select
          labelId="event-type"
          id="event-type"
          value={eventType}
          label="Event Type"
          onChange={(e) => handleChange(e, "category")}
        >
          <MenuItem value={10}>Бiг</MenuItem>
          <MenuItem value={20}>Велоспорт</MenuItem>
          <MenuItem value={30}>Веслування</MenuItem>
        </Select>
      </FormControl>
      <FormControl sx={{ m: 1, width: "100%" }}>
        <InputLabel id="event-date">Дата</InputLabel>
        <Select
          labelId="event-date"
          id="event-date"
          value={eventDate}
          label="Event Date"
          onChange={(e) => handleChange(e, "date")}
        >
          <MenuItem value={10}>Жовтень</MenuItem>
          <MenuItem value={20}>Листопад</MenuItem>
          <MenuItem value={30}>Грудень</MenuItem>
        </Select>
      </FormControl>
      <FormControl sx={{ m: 1, width: "100%" }}>
        <InputLabel id="event-location">Місто</InputLabel>
        <Select
          labelId="event-location"
          id="event-location"
          value={eventLocation}
          label="Event Location"
          onChange={(e) => handleChange(e, "location")}
        >
          <MenuItem value={10}>Київ</MenuItem>
          <MenuItem value={20}>Львів</MenuItem>
          <MenuItem value={30}>Житомир</MenuItem>
        </Select>
      </FormControl>
    </div>
  );
}
