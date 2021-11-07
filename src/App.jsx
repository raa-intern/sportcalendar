import { Switch, Route, Redirect } from "react-router-dom";
import HomePage from "./pages/HomePage";
import EventPage from "./pages/EventPage";

function App() {
  return (
    <Switch>
      <Route path="/" exact>
        <HomePage />
      </Route>
      <Route path="/event/:eventId">
        <EventPage />
      </Route>
      <Route path="/events" exact>
        <EventPage />
      </Route>
      <Route path="/organizers">
        <EventPage />
      </Route>
      <Route path="/cooperation">
        <EventPage />
      </Route>
      <Route path="/about">
        <EventPage />
      </Route>
      <Redirect to="/" />
    </Switch>
  );
}

export default App;
