import React from "react";
import Header from "../components/Header";
import Footer from "../components/Footer";
import EventCard from "../components/EventCard";
import Filter from "../components/Filter";
import { Container } from "@mui/material";
import events from "../db/db.json";
console.log(events);
export default function HomePage() {
  return (
    <>
      <Header />
      <Container maxWidth="xl">
        <Filter />
        {events && (
          <ul>
            {events.map((event) => {
              return (
                <li key={event.id}>
                  <EventCard event={event} />
                </li>
              );
            })}
          </ul>
        )}
      </Container>
      <Footer />
    </>
  );
}
