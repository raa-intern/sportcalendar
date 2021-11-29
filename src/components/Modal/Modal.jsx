import { useEffect } from "react";
import { createPortal } from "react-dom";
import { CgClose } from "react-icons/cg";
import { Overlay, ModalContent, Button } from "../Modal/Modal.styled";

const modalRoot = document.querySelector("#modal-root");

function Modal({ closeModal, children }) {
  useEffect(() => {
    window.addEventListener("keydown", handleKeyDown);
    return () => {
      window.removeEventListener("keydown", handleKeyDown);
    };
  });

  const handleKeyDown = (event) => {
    if (event.code === "Escape") {
      closeModal();
    }
  };

  const handleOnOverlayClick = (event) => {
    if (event.target === event.currentTarget) {
      closeModal();
    }
  };

  return createPortal(
    <Overlay onClick={handleOnOverlayClick}>
      <ModalContent>
        <Button type="button" onClick={() => closeModal()}>
          <CgClose />
        </Button>
        {children}
      </ModalContent>
    </Overlay>,
    modalRoot
  );
}

export default Modal;
