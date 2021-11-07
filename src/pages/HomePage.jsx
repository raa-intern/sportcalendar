import React from "react";
import Header from "../components/Header/Header";
import Footer from "../components/Footer/Footer";
import EventCard from "../components/EventCard/EventCard";
import Filter from "../components/Filter";
import Container from "../components/Container/Container";
import events from "../db/db.json";

export default function HomePage() {
  return (
    <>
      <Header />
      <Container>
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
