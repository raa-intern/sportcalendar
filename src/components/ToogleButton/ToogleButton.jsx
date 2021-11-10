import { useState } from "react";
import s from "./ToogleButton.module.css";

export default function ToogleButton({ buttons, onClick }) {
  const [clickedId, setClickedId] = useState(0);

  const handleClick = (event, id) => {
    setClickedId(id);
    onClick(event);
  };

  return (
    <div className={s.buttonWrap}>
      {buttons.map((buttonLabel, i) => (
        <button
          key={i}
          name={buttonLabel}
          onClick={(event) => handleClick(event, i)}
          className={i === clickedId ? `${s.active}` : `${s.customButton}`}
        >
          {buttonLabel}
        </button>
      ))}
    </div>
  );
}
